import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TransactionsManager } from './transactions-manager';

describe('TransactionsManager', () => {
  let component: TransactionsManager;
  let fixture: ComponentFixture<TransactionsManager>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [TransactionsManager],
    }).compileComponents();

    fixture = TestBed.createComponent(TransactionsManager);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
