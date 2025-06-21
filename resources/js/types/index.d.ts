import type { LucideIcon } from 'lucide-vue-next';
import type { Config } from 'ziggy-js';

export interface Auth {
    user: User;
}

export interface BreadcrumbItem {
    title: string;
    href: string;
}

export interface NavItem {
    title: string;
    href: string;
    icon?: LucideIcon;
    isActive?: boolean;
}

export type AppPageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
    ziggy: Config & { location: string };
    sidebarOpen: boolean;
};

export interface User {
    id: number;
    name: string;
    email: string;
    avatar?: string;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
}

export type BreadcrumbItemType = BreadcrumbItem;

// Custom Types

export interface IUserProfile {
    name: string
    username: string
    avatar: string
    bio: string
    location: string
    followers: string
    following: string
    products: string
    joined: string
}

export interface IProduct {
    id: number
    user_id: number
    name: string
    slug: string
    category: string
    sub: string
    story: string
    image: string
    likes: number
    views: number
    link: string
    created_at: string
    updated_at: string
}

export interface IProductImage {
    id: number
    product_id: number
    image: string
    alt_text?: string | null
    order: number
    created_at: string
    updated_at: string
}


export interface IUserProduct {
    name: string
    slug: string
    category: string
    image: string
    likes: number
    views: number
    images_count: number
}

export interface IUserProductModal extends IProduct {
    images: IProductImage[]
}