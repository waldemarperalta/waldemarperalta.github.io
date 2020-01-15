import { Component, OnInit } from '@angular/core';
import { AppComponent } from './../app.component';
@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent extends AppComponent implements OnInit {
  chamaFuncoes() {
    this.categoriasMes(), this.Despesas(), this.cartao(), this.carteira();
  }
  screen() {
    window.onscroll = () => {
      const windowScroll = window.pageYOffset;
      if (windowScroll < -100) {
        document.querySelector('#saldo').innerHTML = this.processar;
        window.location.reload();
      }
    };
  }
  ngOnInit() {
    this.chamaFuncoes(), this.screen();
    const d = new Date();
    const area = $('#chartCat').click(() => {
       $('#list').toggleClass('ver');
       $('#list').addClass('slideInDwon');

     });
    }

}
