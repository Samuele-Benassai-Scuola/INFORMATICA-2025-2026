import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ConvertedBalanceCard } from './converted-balance-card';

describe('ConvertedBalanceCard', () => {
  let component: ConvertedBalanceCard;
  let fixture: ComponentFixture<ConvertedBalanceCard>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ConvertedBalanceCard],
    }).compileComponents();

    fixture = TestBed.createComponent(ConvertedBalanceCard);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
