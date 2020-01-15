import { AppComponent } from './../app.component';
import { Component, OnInit} from '@angular/core';
@Component({
  selector: 'app-more',
  templateUrl: './more.component.html',
  styleUrls: ['./more.component.scss']
})
export class MoreComponent extends AppComponent implements OnInit {



  ngOnInit() {
  window.onscroll = () => {
    const windowScroll = window.pageYOffset;
    if (windowScroll >= 80) {
        this.sticky = true;
      } else {
        this.sticky = false;
      }
  };
  this.verMes(this.meseslist[this.data.getMonth()]);
  const divmes = this.data.getMonth();
  $(this.meseslist[this.data.getMonth()]).addClass('bg-text');
  }
}
