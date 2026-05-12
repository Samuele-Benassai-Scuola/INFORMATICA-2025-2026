import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AccountDesc } from './account-desc';

describe('AccountDesc', () => {
  let component: AccountDesc;
  let fixture: ComponentFixture<AccountDesc>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [AccountDesc],
    }).compileComponents();

    fixture = TestBed.createComponent(AccountDesc);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
