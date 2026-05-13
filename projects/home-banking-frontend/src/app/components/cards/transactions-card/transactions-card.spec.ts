import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TransactionsCard } from './transactions-card';

describe('TransactionsCard', () => {
  let component: TransactionsCard;
  let fixture: ComponentFixture<TransactionsCard>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [TransactionsCard],
    }).compileComponents();

    fixture = TestBed.createComponent(TransactionsCard);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
