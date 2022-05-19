<template>
  <Layout title="Товары">
    <ProductList :supplier_id="supplier_id"/>
  </Layout>
</template>

<script>
import Layout from '@/components/Layout/Layout';
import ProductList from '@/components/ProductList/ProductList';

export default {
  name: 'ProductsPage',
  components: {
    Layout,
    ProductList,
  },
  props: {
    supplier_id: Number,
  }
}
</script>