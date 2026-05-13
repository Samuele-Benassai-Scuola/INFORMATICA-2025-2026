import { Component, Input } from '@angular/core';
import { RouterLink } from "@angular/router";

@Component({
  selector: 'app-transactions-card',
  imports: [RouterLink],
  templateUrl: './transactions-card.html',
  styleUrl: './transactions-card.css',
})
export class TransactionsCard {
  @Input() id_account!: number
}
