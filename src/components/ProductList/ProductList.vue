<template>
  <div :class="$style.root">
    <Table
        :headers="[
        {value: 'id', text: 'ID'},
        {value: 'name', text: 'Название'},
        {value: 'supplier', text: 'Поставщик'},
        {value: 'description', text: 'Описание'},
        {value: 'price', text: 'Стоимость'},
        {value: 'control', text: 'Действие'},
      ]"
        :items="items"
    >
      <template v-slot:control="{ item }">
        <Btn @click="onClickEdit(item.id)" theme="info">Изменить</Btn>
        <Btn @click="onClickRemove(item.id)" theme="danger">Удалить</Btn>
      </template>
    </Table>
    <router-link :to="{ name: 'ProductEdit' }">
      <Btn :class="$style.create" theme="info">Создать</Btn>
    </router-link>
  </div>
</template>

<script>
import { useStore } from 'vuex';
import { computed, onMounted } from 'vue';
import { useRouter } from 'vue-router';

import { selectItems, selectFilteredItems, removeItem, fetchItems, fetchFilteredItems } from '@/store/products/selectors';
import Table from '@/components/Table/Table';
import Btn from '@/components/Btn/Btn';

export default {
  name: 'ProductList',
  components: {
    Table,
    Btn,
  },
  props: {
    supplier_id: Number,
  },  setup(props) {
    const store = useStore();
    const router = useRouter();
    onMounted(() => {
      !!(props.supplier_id) ? fetchFilteredItems(store) : fetchItems(store);
    });
    return {
      items: computed(() => !!(props.supplier_id) ? selectFilteredItems(store, props.supplier_id) : selectItems(store)),
      onClickRemove: id => {
        const isConfirmRemove = confirm('Вы действительно хотите удалить запись?')
        if (isConfirmRemove) {
          removeItem(store, id)
        }
      },
      onClickEdit: id => {
        router.push({ name: 'ProductEdit', params: { id } })
      },
    }
  }
}
</script>

<style module lang="scss">
.root {

  .create {
    margin-top: 16px;
  }

}
</style>