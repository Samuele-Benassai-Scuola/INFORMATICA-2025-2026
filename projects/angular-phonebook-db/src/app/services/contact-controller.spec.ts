import { TestBed } from '@angular/core/testing';

import { ContactController } from './contact-controller';

describe('ContactController', () => {
  let service: ContactController;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ContactController);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
