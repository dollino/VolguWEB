<template>
  <Layout title="Поставщики">
    <SupplierList />
  </Layout>
</template>

<script>
import Layout from '@/components/Layout/Layout';
import SupplierList from '@/components/SupplierList/SupplierList';

export default {
  name: 'SuppliersPage',
  components: {
    Layout,
    SupplierList,
  }
}
</script>