import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TransactionMakerCard } from './transaction-maker-card';

describe('TransactionMakerCard', () => {
  let component: TransactionMakerCard;
  let fixture: ComponentFixture<TransactionMakerCard>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [TransactionMakerCard],
    }).compileComponents();

    fixture = TestBed.createComponent(TransactionMakerCard);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
