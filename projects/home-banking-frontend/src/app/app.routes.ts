import { Routes } from '@angular/router';
import { Home } from './components/home/home';
import { AccountManager } from './components/account-manager/account-manager';
import { BalanceManager } from './components/balance-manager/balance-manager';
import { TransactionsManager } from './components/transactions-manager/transactions-manager';
import { TransactionMakerManager } from './components/transaction-maker-manager/transaction-maker-manager';
import { SingleTransactionManager } from './components/single-transaction-manager/single-transaction-manager';

export const routes: Routes = [
    { path: '', component: Home },
    { path: 'account/:id_account', component: AccountManager},
    { path: 'account/:id_account/balance', component: BalanceManager},
    { path: 'account/:id_account/transaction', component: TransactionsManager},
    { path: 'account/:id_account/transaction/:id', component: SingleTransactionManager},
    { path: 'account/:id_account/transaction/make', component: TransactionMakerManager},
];
