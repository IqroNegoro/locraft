import { clsx, type ClassValue } from 'clsx';
import { twMerge } from 'tailwind-merge';

export function cn(...inputs: ClassValue[]) {
    return twMerge(clsx(inputs));
}

export const render = (file: File) => URL.createObjectURL(file);

export const formatNumber = (num: number | string): string => new Intl.NumberFormat('id-ID').format(Number(num));