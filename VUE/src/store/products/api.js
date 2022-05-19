import Api from "@/api";

class Products extends Api {

    /** 
     * @returns {Promise<Response>}
    */
    products = () => this.rest('/products/list.json');
    productsFiltered = () => this.rest('/products/filtered-list.json');

    /**
     
     * @param id
     * @returns {Promise<*>}
     */
    remove = ( id ) => this.rest('/products/delete-item', {
        method: 'POST',
        'Content-Type': 'application/json',
        body: JSON.stringify({ id }),
    }).then(() => id) 

    /**
    
     * @param product 
     * @returns {Promise<Response>}
     */
    add = ( product ) => this.rest('/products/add-item', {
        method: 'POST',
        'Content-Type': 'application/json',
        body: JSON.stringify(product),
    }).then(() => ({...product, id: new Date().getTime()})) 

    /**
    
     * @param product 
     * @returns {Promise<*>}
     */
    update = ( product ) => this.rest('/products/update-item', {
        method: 'POST',
        'Content-Type': 'application/json',
        body: JSON.stringify(product),
    }).then(() => product) 

}

export default new Products();