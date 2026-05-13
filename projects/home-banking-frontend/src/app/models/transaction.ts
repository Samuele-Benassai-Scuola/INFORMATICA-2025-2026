

export interface Transaction {
    id: number,
    id_account: number,
    type: string,
    amount: number,
    description: string,
    created_at: Date,
    balance_after: number
}