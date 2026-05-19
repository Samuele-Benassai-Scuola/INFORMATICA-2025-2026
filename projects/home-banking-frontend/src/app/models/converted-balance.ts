

export interface ConvertedBalance {
    id_account: number,
    provider: string,
    conversion_type: string,
    from_currency: string,
    to_currency: string,
    original_balance: number,
    converted_balance: number,
    rate: number
}