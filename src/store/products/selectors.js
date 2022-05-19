export const fetchItems = (store) => {
    const { dispatch } = store;
    dispatch('products/fetchItems');
};

export const fetchFilteredItems = ( store ) => {
    const { dispatch } = store;
    dispatch('products/fetchFilteredItems');
};

export const selectFilteredItems = ( store, supplier_id = 0 ) => {
    const { getters } = store;
    return  getters['products/items'];
}

export const selectItems = (store) => {
    const { getters } = store;
    return getters['products/items']
}

export const removeItem = (store, id) => {
    const { dispatch } = store;
    dispatch('products/removeItem', id);
}

export const addItem = (store, { name, supplier, description, price }) => {
    const { dispatch } = store;
    dispatch('products/addItem', { name, supplier, description, price });
}

export const updateItem = (store, { id, name, supplier, description, price }) => {
    const { dispatch } = store;
    dispatch('products/updateItem', { id, name, supplier, description, price });
}

export const selectItemById = (store, id) => {
    const { getters } = store;
    return getters['products/itemsByKey'][id] || {};
}