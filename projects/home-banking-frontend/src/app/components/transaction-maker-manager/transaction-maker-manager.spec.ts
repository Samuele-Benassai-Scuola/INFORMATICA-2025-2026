import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TransactionMakerManager } from './transaction-maker-manager';

describe('TransactionMakerManager', () => {
  let component: TransactionMakerManager;
  let fixture: ComponentFixture<TransactionMakerManager>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [TransactionMakerManager],
    }).compileComponents();

    fixture = TestBed.createComponent(TransactionMakerManager);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
