import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/products',
    name: 'Products',
    component: () => import('@/views/ProductsPage')
  },
  {
    path: '/products/filtered/:supplier_id?',
    name: 'ProductFiltered',
    props: (route) => {
      return {
        supplier_id: route.params.supplier_id,
      }
    },
    component: () => import('@/views/ProductsPage')
  },
  {
    path: '/suppliers',
    name: 'Suppliers',
    component: () => import('@/views/SuppliersPage'),
  },
  {
    path: '/product-edit/:id?',
    name: 'ProductEdit',
    props: (route) => {
      return {
        id: route.params.id,
      }
    },
    component: () => import('@/views/ProductEdit'),
  },
  {
    path: '/supplier-edit/:id?',
    name: 'SupplierEdit',
    props: (route) => {
      return {
        id: route.params.id,
      }
    },
    component: () => import('@/views/SupplierEdit'),
  },
  {
    path: '/:catchAll(.*)',
    name: 'NotFound',
    component: () => import('@/views/ProductsPage'),
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
