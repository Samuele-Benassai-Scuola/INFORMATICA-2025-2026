import { ComponentFixture, TestBed } from '@angular/core/testing';

import { HeroGenerator } from './hero-generator';

describe('HeroGenerator', () => {
  let component: HeroGenerator;
  let fixture: ComponentFixture<HeroGenerator>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [HeroGenerator],
    }).compileComponents();

    fixture = TestBed.createComponent(HeroGenerator);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
