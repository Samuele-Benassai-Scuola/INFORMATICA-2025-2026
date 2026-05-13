import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BalanceManager } from './balance-manager';

describe('BalanceManager', () => {
  let component: BalanceManager;
  let fixture: ComponentFixture<BalanceManager>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BalanceManager],
    }).compileComponents();

    fixture = TestBed.createComponent(BalanceManager);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
