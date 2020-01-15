import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { VercategoriaComponent } from './vercategoria.component';

describe('VercategoriaComponent', () => {
  let component: VercategoriaComponent;
  let fixture: ComponentFixture<VercategoriaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ VercategoriaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(VercategoriaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
