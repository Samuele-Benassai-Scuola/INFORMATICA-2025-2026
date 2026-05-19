import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SingleTransactionManager } from './single-transaction-manager';

describe('SingleTransactionManager', () => {
  let component: SingleTransactionManager;
  let fixture: ComponentFixture<SingleTransactionManager>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [SingleTransactionManager],
    }).compileComponents();

    fixture = TestBed.createComponent(SingleTransactionManager);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
