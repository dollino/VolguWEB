<template>
  <Layout :title="id ? 'Редактирование записи' : 'Создание записи'">
    <SupplierForm
        :id="id"
        @submit="onSubmit"
    />
  </Layout>
</template>

<script>
import { useStore } from 'vuex';

import { updateItem, addItem } from '@/store/suppliers/selectors';
import Layout from '@/components/Layout/Layout';
import SupplierForm from '@/components/SupplierForm/SupplierForm';
export default {
  name: 'SupplierEdit',
  props: {
    id: String,
  },
  components: {
    Layout,
    SupplierForm,
  },
  setup() {
    const store = useStore();
    return {
      onSubmit: ({ id, supplier }) => id ?
          updateItem(store, { id, supplier }) :
          addItem(store, { supplier }),
    };
  }
}
</script>