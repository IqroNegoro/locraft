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
export interface IUser {
    id: number;
    name: string;
    username: string;
    email: string;
    email_verified_at: string | null;
    password: string;
    avatar?: string | null;
    bio?: string | null;
    location?: string | null;
    followers: number;
    products: number;
    following: number;
    remember_token?: string | null;
    created_at: string;
    updated_at: string;

    joined?: string;

    followers_exists?: boolean
}

export interface ICategory {
    id: number;
    name: string;
    slug: string;
    description?: string | null;
    created_at: string;
    updated_at: string;

    products_count?: number;
}

export interface IProduct {
    id: number;
    user_id: number;
    name: string;
    slug: string;
    category_id: number;
    sub: string;
    story: string;
    image: string;
    likes: number;
    total_likes?: number | null;
    views: number;
    link: string;
    created_at: string;
    updated_at: string;

    user?: IUser;
    category: ICategory;
    images?: IProductImage[];
    likes_list?: ILike[];
    liked?: ILike | null;
    reviews?: IReview[];

    image_url?: string;
    liked_exists?: boolean;
    images_count?: number;
    createdAt?: string;
}

export interface IProductImage {
    id: number;
    product_id: number;
    image: string;
    alt_text?: string | null;
    order: number;
    created_at: string;
    updated_at: string;

    product?: IProduct;

    image_url?: string;
}

export interface IReview {
    id: number;
    user_id: number;
    product_id: number;
    rating: number;
    review: string;
    created_at: string;
    updated_at: string;

    user?: IUser;

    createdAt?: string;
}

export interface ILike {
    id: number;
    user_id: number;
    product_id: number;
    created_at: string;
    updated_at: string;
}

export interface IFollow {
    id: number;
    user_id: number;
    followed_user_id: number;
    created_at: string;
    updated_at: string;

    user?: IUser;
    followed?: IUser;
}

export interface IReport {
    id: number;
    user_id: number;
    product_id: number;
    reason: string;
    created_at: string;
    updated_at: string;

    user?: IUser;
    product?: IProduct;

    createdAt?: string;
}
