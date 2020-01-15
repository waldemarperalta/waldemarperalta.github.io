import { AppComponent } from './../app.component';
import { Component, OnInit } from '@angular/core';
@Component({
  selector: 'app-vercategoria',
  templateUrl: './vercategoria.component.html',
  styleUrls: ['./vercategoria.component.scss']
})
export class VercategoriaComponent extends AppComponent implements OnInit {

  ngOnInit() {
    this.verCatTotal(sessionStorage.getItem('mes'), sessionStorage.getItem('categoria'));
    window.onscroll = () => {
      const windowScroll = window.pageYOffset;
      if (windowScroll >= 80) {
          this.sticky = true;
        } else {
          this.sticky = false;
        }
    };
  }

}
