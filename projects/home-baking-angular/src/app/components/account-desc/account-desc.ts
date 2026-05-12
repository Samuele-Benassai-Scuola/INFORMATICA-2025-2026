import { Component, Input } from '@angular/core';
import { Account } from '../../interfaces/account';

@Component({
  selector: 'app-account-desc',
  imports: [],
  templateUrl: './account-desc.html',
  styleUrl: './account-desc.css',
})
export class AccountDesc {
  @Input() data!: Account
}
