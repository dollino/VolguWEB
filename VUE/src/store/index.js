import { createStore } from 'vuex'
import products from './products';
import suppliers from './suppliers';
export default createStore({
  modules: {
    products,
    suppliers,
  },
  state: {},
  mutations: {},
  actions: {},
})