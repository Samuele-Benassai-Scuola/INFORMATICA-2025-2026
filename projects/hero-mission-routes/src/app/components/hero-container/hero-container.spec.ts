import { ComponentFixture, TestBed } from '@angular/core/testing';

import { HeroContainer } from './hero-container';

describe('HeroContainer', () => {
  let component: HeroContainer;
  let fixture: ComponentFixture<HeroContainer>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [HeroContainer],
    }).compileComponents();

    fixture = TestBed.createComponent(HeroContainer);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
