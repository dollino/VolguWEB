<template>
  <div :class="$style.root">
    <div v-if="form.id" :class="$style.item">
      <div :class="$style.label">
        <label for="id">id</label>
      </div>
      <input :value="form.id" disabled :class="$style.input" id="id" placeholder="id" type="text">
    </div>
    <div :class="$style.item">
      <div :class="$style.label">
        <label for="supplier">Название</label>
      </div>
      <input v-model="form.supplier" :class="$style.input" name="city" id="supplier" type="text">
    </div>
    <div :class="$style.item">
      <Btn @click="onClick" :disabled="!isValidForm" theme="info">Сохранить</Btn>
    </div>
  </div>
</template>

<script>
import { computed, reactive, onBeforeMount, watchEffect } from 'vue';
import { useStore } from 'vuex';
import { useRouter } from 'vue-router';

import { selectItemById, fetchItems, selectItems } from '@/store/suppliers/selectors';
import Btn from '@/components/Btn/Btn';
export default {
  name: 'SupplierForm',
  components: {
    Btn,
  },
  props: {
    id: { type: String, default: '' },
  },
  setup(props, context) {
    const store = useStore();
    const router = useRouter();
    const supplierList = computed(() => selectItems(store));
    const form = reactive({
      id: '',
      supplier: '',
    });

    onBeforeMount(() => {
      fetchItems(store);
    });

    watchEffect(() => {
      const supplier = selectItemById( store,  props.id );
      Object.keys(supplier).forEach(key => {
        form[key] = supplier[key]
      })
    });

    return {
      supplierList,
      form,
      isValidForm: computed(() =>  !!(form.supplier)),
      onClick: () => {
        context.emit('submit', form);
        router.push({ name: 'Suppliers' })
      },
    }

  }
}
</script>

<style module lang="scss">
.root {
  padding-top: 30px;
  max-width: 900px;

  .item {
    display: flex;
    align-items: center;

    & + .item {
      margin-top: 15px;
    }
  }

  .label {
    flex: 0 0 150px;
  }

  .input {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
  }
}
</style>