import Api from "@/api";

class Suppliers extends Api {

    /**
   
     * @returns {Promise<Response>}
     */
    suppliers = () => this.rest('/suppliers/list.json');

    /**
    
     * @param id
     * @returns {Promise<*>}
     */
    remove = ( id ) => this.rest('/suppliers/delete-item', {
        method: 'POST',
        'Content-Type': 'application/json',
        body: JSON.stringify({ id }),
    }).then(() => id) 

    /**
   
     * @param name 
     * @returns {Promise<Response>}
     */
    add = ( name ) => this.rest('suppliers/add-item', {
        method: 'POST',
        'Content-Type': 'application/json',
        body: JSON.stringify(name),
    }).then(() => ({...name, id: new Date().getTime()}))  

    /**
    
     * @param name 
     * @returns {Promise<*>}
     */
    update = ( name ) => this.rest('suppliers/update-item', {
        method: 'POST',
        'Content-Type': 'application/json',
        body: JSON.stringify(name),
    }).then(() => name)  
}

export default new Suppliers();
