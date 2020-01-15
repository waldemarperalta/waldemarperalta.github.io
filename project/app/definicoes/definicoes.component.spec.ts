import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DefinicoesComponent } from './definicoes.component';

describe('DefinicoesComponent', () => {
  let component: DefinicoesComponent;
  let fixture: ComponentFixture<DefinicoesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DefinicoesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DefinicoesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
