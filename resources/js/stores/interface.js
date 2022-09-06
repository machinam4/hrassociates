import { defineStore } from "pinia";

// You can name the return value of `defineStore()` anything you want, but it's best to use the name of the store and surround it with `use` and `Store` (e.g. `useUserStore`, `useCartStore`, `useProductStore`)
// the first argument is a unique id of the store across your application
export const useInterfaceStore = defineStore("interface", {
    state: () => ({
        AddModalIsOpen: false,
        EditModalIsOpen: false,
        DeleteModalIsOpen: false,
        count: 0,
        EditData: [],
    }),
    getters: {
        double: (state) => state.count * 2,
    },
    actions: {
        toggleModal(modal) {
            switch (modal) {
                case "Add":
                    this.AddModalIsOpen = !this.AddModalIsOpen;
                    break;
                case "Edit":
                    console.log(1234);
                    this.EditModalIsOpen = !this.EditModalIsOpen;
                    break;
                case "Delete":
                    this.DeleteModalIsOpen = !this.DeleteModalIsOpen;
                    break;
                default:
                    break;
            }
        },
        setEditData(data) {
            this.EditData = data;
        },
    },
});
