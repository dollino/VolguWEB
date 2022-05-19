export const fetchItems = ( store ) => {
    const { dispatch } = store;
    dispatch('suppliers/fetchItems');
};

export const selectItems = ( store ) => {
    const { getters } = store;
    return getters['suppliers/items']
}

export const removeItem = ( store, id ) => {
    const { dispatch } = store;
    dispatch('suppliers/removeItem', id);
}

export const addItem = ( store, { name } ) => {
    const { dispatch } = store;
    dispatch('suppliers/addItem', { name });
}

export const updateItem = ( store, { id, name }) => {
    const { dispatch } = store;
    dispatch('suppliers/updateItem', { id, name });
}

export const selectItemById = (store, id) => {
    const { getters } = store;
    return getters['suppliers/itemsByKey'][id] || {};
}