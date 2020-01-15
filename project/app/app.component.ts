import { Component, OnInit, ViewChild, ElementRef, HostListener } from '@angular/core';
import { Router } from '@angular/router';
import {Chart} from 'chart.js';
import * as Parse from 'parse';
import {} from 'jquery';
import { ToastrService } from 'ngx-toastr';
import * as M from 'materialize-css';
const server = require('../config/config.js');

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit {


title = 'Meu Kumbu';
coresCat = ['red', 'yellow', 'blue', 'gray', 'aqua', 'darkviolet', 'red', 'black', 'orange'];
sticky = false;
// tslint:disable-next-line: max-line-length
categoryList: object[] = [
  {categoria : 'Alimentação', cor: 'orange'},
  {categoria: 'Electricidade', cor: 'blue'},
  {categoria: 'Água', cor: 'aqua'},
  {categoria: 'Internet', cor: '#9edd04'},
  {categoria: 'Televisão', cor: 'darkviolet'},
  {categoria: 'Combustivel', cor: 'black'},
  {categoria: 'Diversão', cor: '#ff00f8'},
  {categoria: 'Formação', cor: 'green'},
  {categoria: 'Transporte', cor: 'yellow'},
  {categoria: 'Impostos', cor: 'red'},
  {categoria: 'Outros', cor: 'gray'},
];
meseslist = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
dayName = new Array ('domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sábado');
data = new Date();
valor;
server = require('../config/config.js');
User = Parse.Object.extend('User');
Despesa = Parse.Object.extend('Despesas');
Categorias = Parse.Object.extend('Categorias');
NewCategory = Parse.Object.extend('MyCategorias');

categoryDespesas: object[] = [];
mesAtual;
myname;
mypass;
cartaoTotal: number;
carteiraTotal: number;
minhaVar: object[] = [];
totalmes;
totalmesCat;
categoriaAtual;
Despesastotais;
processar = '<span id="process" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';
categoryListOffline: object[] = [];
idElemeto;
objectRegistro: object;

//////////////////////////////////

@ViewChild('quantidade') quantidade: ElementRef;
@ViewChild('artigo') artigo: ElementRef;
@ViewChild('categoria') categoria: ElementRef;
@ViewChild('categoriaObject') categoriaObject: ElementRef;

@ViewChild('money') money: ElementRef;
@ViewChild('dia') dia: ElementRef;
@ViewChild('mes') mes: ElementRef;
@ViewChild('ano') ano: ElementRef;
//
@ViewChild('total') total: ElementRef;
@ViewChild('totaldespesas') despesas: ElementRef;
reducer = (accumulator, currentValue) => accumulator + currentValue;

constructor( public toastr: ToastrService, private router: Router) {
server.Server(Parse);
}


logIn() {
    // tslint:disable-next-line: max-line-length
    document.querySelector('.logbtn').innerHTML = '<div class="spinner-border text-danger" role="status"><span class="sr-only">Loading...</span></div>';
    const nameInput = this.myname.nativeElement.value;
    const passInput = this.mypass.nativeElement.value;
    // tslint:disable-next-line: no-shadowed-variable
    const user = Parse.User.logIn( nameInput , passInput).then((user) => {
        console.log('User created successful with name: ' + user.get('username') + ' and email: ' + user.get('email'));
        const currentUser = Parse.User.current();
        sessionStorage.setItem('idUserObject', JSON.stringify(currentUser));
        sessionStorage.setItem('idUser', user.id);
        sessionStorage.setItem('username', user.get('username'));
        sessionStorage.setItem('email', user.get('email'));
        this.router.navigate(['/myaccountpage']);
      }).catch((error) => {
        this.toastr.error(error.message);
        document.querySelector('.logbtn').innerHTML = '';

        this.toastr.warning('Erro: ' + error.code + '');
    });
}
async SaveDespesa() {
    const despesa = new this.Despesa();
    const quantidade = +this.quantidade.nativeElement.value;
    const artigo = this.artigo.nativeElement.value;
    const categoria = this.categoria.nativeElement.value;
    const money = this.money.nativeElement.value;
    const dia = this.dia.nativeElement.value;
    const mes = this.mes.nativeElement.value;
    const ano = this.ano.nativeElement.value;
    despesa.set('quantidade', quantidade);
    despesa.set('artigo', artigo);
    despesa.set('categoria', categoria);
    despesa.set('cartao_carteira', money);
    despesa.set('dia_mes', dia);
    despesa.set('dia_semana', this.dayName[this.data.getDay() ]);
    despesa.set('mes', mes);
    despesa.set('ano', ano);
    if ( despesa !== '' && quantidade !== undefined && artigo !== '' && money !== '') {
    despesa.save().then((res) => {
    M.toast({html: 'Anuncio efetuado com sucesso'});
    this.readThenUpdateCate(categoria, quantidade, mes, ano);
    this.Despesas();
 }).catch((error) => {
  M.toast({html: 'Error: ' + error.message});
 });
    } else {
        M.toast({html: 'preencha os campos todos', classes: 'rounded'});
    }
}
SaveDefinicoes() {
  this.toastr.success('Definições salvas');
}
async Despesas() {
  const query = new Parse.Query(this.Despesa);
  const result = await query.find();
  const array1 = [];
  if (result.length > 0) {
  // tslint:disable-next-line: prefer-for-of
  for (let i = 0 ; i < result.length; i++) {
      const busca = result[i];
      const valor = busca.get('quantidade');
      array1.push(valor);
  }
  const soma = (array1.reduce(this.reducer));
  this.Despesastotais = server.getMoneyFormat(soma);
} else {
  this.Despesastotais = server.getMoneyFormat(0);
}
}

deleteDespesa(id) {
  const query = new Parse.Query(this.Despesa);
  query.equalTo('objectId' , id);
  query.first().then( (found) => {
  this.idElemeto = found;
  $('#' + id).toggleClass('ver');
  $('#' + id).addClass('fadeIn');
  });
}
canselar(id) {
  $('#' + id).removeClass('ver');
}
editarRegistro(select) {
  sessionStorage.setItem('registro', select);
  this.router.navigate(['/add']);
}
verificaRegistroEditar() {
  const valor = sessionStorage.getItem('registro');
  if (valor) {
  const query = new Parse.Query(this.Despesa);
  query.equalTo('objectId', valor);
  query.first().then((res) => {
  const despesa = res;
  this.quantidade.nativeElement.value = despesa.get('quantidade');
  this.artigo.nativeElement.value = despesa.get('artigo');
  this.categoria.nativeElement.value = despesa.get('categoria');
  this.money.nativeElement.value = despesa.get('cartao_carteira');
  this.dia.nativeElement.value = despesa.get('dia_mes');
  this.mes.nativeElement.value = despesa.get('mes');
  this.ano.nativeElement.value = despesa.get('ano');
});
} else {
  const data = new Date();
  this.dia.nativeElement.value = data.getDate();
  this.mes.nativeElement.value = this.meseslist [data.getMonth() ];
  this.ano.nativeElement.value = data.getFullYear();
  }
}
apagar(idFav) {
  idFav.destroy().then((response) => {
      this.subtrai(idFav.get('categoria'), idFav.get('quantidade'), idFav.get('mes'), idFav.get('ano'));
      this.verCatTotal(sessionStorage.getItem('mes'), sessionStorage.getItem('categoria'));
      M.toast({html: 'Registro Removido'});
        }).catch((response, error) => {
          M.toast({html: 'Registro Removido' + error.message});
        });
}

async cartao() {
  const query = new Parse.Query(this.Despesa);
  query.equalTo('cartao_carteira', '1');
  const result = await query.find();
  const array1 = [];
  if (result.length > 0) {
  // tslint:disable-next-line: prefer-for-of
  for (let i = 0 ; i < result.length; i++) {
      const busca = result[i];
      const valor = busca.get('quantidade');
      array1.push(valor);
  }
  const soma = (array1.reduce(this.reducer));
  this.cartaoTotal = server.getMoneyFormat(soma);
  } else {
    this.cartaoTotal = server.getMoneyFormat(0);
  }
}
async carteira() {
  const query = new Parse.Query(this.Despesa);
  query.equalTo('cartao_carteira', '2');
  const result = await query.find();
  const array1 = [];
  if (result.length > 0) {
    // tslint:disable-next-line: prefer-for-of
    for (let i = 0 ; i < result.length; i++) {
        const busca = result[i];
        const valor = busca.get('quantidade');
        array1.push(valor);
    }
    const soma = (array1.reduce(this.reducer));
    this.carteiraTotal = server.getMoneyFormat(soma);
    } else {
      this.carteiraTotal = server.getMoneyFormat(0);
    }
}
async categorias() {
  const query = new Parse.Query(this.Categorias);
  query.ascending('cat_name');
  const result = await query.find();
  // tslint:disable-next-line: prefer-for-of
  for (let i = 0 ; i < result.length; i++) {
      const busca = result[i];
      const cat = busca.get('cat_name');
      this.minhaVar.push(cat);
  }
}
async categoriasOffline(mes) {
  this.categoryListOffline = [];
  const query = new Parse.Query(this.NewCategory);
  query.descending('totalmes');
  const result = await query.find();
  // tslint:disable-next-line: prefer-for-of
  for (let i = 0 ; i < result.length; i++) {
      const busca = result[i];
      const cat = busca.get('cat_name');
      this.categoryListOffline.push(busca);
  }
}
async verMes(mes) {
  this.categoriasOffline(mes);
  this.mesAtual = mes;
  const array = [];
  let mvalor;
  let qtd;
  const catarray = [];
  const query = new Parse.Query(this.Despesa);
  query.equalTo('mes', mes);
  query.ascending('categoria');

  const result = await query.find();
  if (result.length > 0) {
  // tslint:disable-next-line: prefer-for-of
  for (let i = 0 ; i < result.length; i++) {
      const busca = result[i];
      qtd = busca.get('quantidade');
      mvalor = busca.get('categoria');
      array.push(qtd);
      catarray.push(mvalor);
  }
  // M.toast({html : cate});
  const soma = (array.reduce(this.reducer));
  this.totalmes = server.getMoneyFormat(soma);
} else {
  this.totalmes = server.getMoneyFormat(0);
}
}

readThenUpdateCate(categoria, qtd, mes, ano) {
  const query = new Parse.Query(this.NewCategory);
  query.equalTo('cat_name', categoria);
  query.equalTo('mes', mes);
  query.equalTo('ano', ano);
  query.first().then( (foundAnnounce) => {
         const soma = foundAnnounce.get('totalmes') + qtd;
         this.updateCategoria(foundAnnounce, soma, mes, ano);
  }).catch((error) => {
      console.log('Error: ' + error.code + ' ' + error.message);
      this.newCategoria(categoria, qtd, mes, ano);
  });
}
subtrai(categoria, qtd, mes, ano) {
  const query = new Parse.Query(this.NewCategory);
  query.equalTo('cat_name', categoria);
  query.equalTo('mes', mes);
  query.equalTo('ano', ano);
  query.first().then( (foundAnnounce) => {
         const soma = foundAnnounce.get('totalmes') - qtd;
         this.updateCategoria(foundAnnounce, soma, mes, ano);
  });
}
newCategoria(cat, quantidade, mescat, anocat) {
  const categoria = new this.NewCategory();
  categoria.set('cat_name', cat);
  categoria.set('totalmes', quantidade);
  categoria.set('mes', mescat);
  categoria.set('ano', anocat);
  categoria.save().then((announce) => {
   }).catch((error) => {
    M.toast({html: 'Erro Removido'});
});
}
updateCategoria(categoria, quantidade, mescat, anocat) {
  categoria.set('totalmes', quantidade);
  categoria.save().then((announce) => {
   }).catch((error) => {
});
}

async categoriasMes() {
  const cat = [];
  const qtd = [];
  const query = new Parse.Query(this.NewCategory);
  const result = await query.find();
  // tslint:disable-next-line: prefer-for-of
  for (let i = 0 ; i < result.length; i++) {
      const busca = result[i];
      const catg = busca.get('cat_name');
      const qtdd = busca.get('totalmes');
      cat.push(catg);
      qtd.push(qtdd);
  }
  const soma = (qtd.reduce(this.reducer));
  this.totalmesCat = server.getMoneyFormat(soma);
  this.donout(cat, qtd);
}

async verCatTotal(mes, categoria) {
  sessionStorage.setItem('mes', mes);
  sessionStorage.setItem('categoria', categoria);
  this.router.navigate(['/categoria']);
  const array = [];
  const artg = [];
  this.categoryDespesas = [];
  const query = new Parse.Query(this.Despesa);
  query.equalTo('mes', mes);
  query.equalTo('categoria', categoria);
  const result = await query.find();
  if (result.length > 0) {
  // tslint:disable-next-line: prefer-for-of
  for (let i = 0 ; i < result.length; i++) {
      const busca = result[i];
      this.categoryDespesas.push(busca);
      const artgo = busca.get('artigo');
      const qtd = busca.get('quantidade');
      artg.push(artgo);
      array.push(qtd);
  }
  const soma = (array.reduce(this.reducer));
  this.totalmesCat = server.getMoneyFormat(soma);
}
  this.categoriaAtual = categoria;
}
donout(list, qtdd) {
  const ctxD = document.querySelectorAll('#doughnutChart');
  const myLineChart = new Chart(ctxD, {
  type: 'doughnut',
  data: {
    labels: '',
    datasets: [{
      data: qtdd,
      backgroundColor: this.coresCat,
      hoverBackgroundColor: this.coresCat
    }]
  },
  options: {
    responsive: true
  }
});

}


dropDef(div) {
 $('#' + div).toggleClass('none');
}
dropCat(div) {
  $('#' + div).toggleClass('ver');
 }
callTab(tab) {
  $('body').toggleClass('lightSpeedIn');
  this.router.navigate([tab]);
}

ngOnInit() {
  const Current = Parse.User.current();
  if (Current) {

  } else {
   // this.callTab('/login');
  }
}
}
