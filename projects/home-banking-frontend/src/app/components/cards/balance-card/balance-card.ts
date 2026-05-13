import { Component, Input } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-balance-card',
  imports: [RouterLink],
  templateUrl: './balance-card.html',
  styleUrl: './balance-card.css',
})
export class BalanceCard {
  @Input() id_account!: number;
}
