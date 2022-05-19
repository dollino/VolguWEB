<template>
  <Layout :title="id ? 'Редактирование записи' : 'Создание записи'">
    <ProductForm @submit="onSubmit" :id="id"  />
  </Layout>
</template>

<script>
import { useStore } from 'vuex';

import { updateItem, addItem } from '@/store/products/selectors';
import ProductForm from '@/components/ProductForm/ProductForm';
import Layout from '@/components/Layout/Layout';

export default {
  name: 'ProductEdit',
  props: {
    id: String,
  },
  components: {
    Layout,
    ProductForm,
  },
  setup() {
    const store = useStore();
    return {
      onSubmit: ({ id, name, description, price, supplier }) => id ?
          updateItem(store, { id, name, supplier, description, price }) :
          addItem(store, { name, supplier, description, price  } )
    }
  }

}
</script>
