import { defineStore } from "pinia";

export const useProductStore = defineStore('product', {
    state: () => ({

        Cart:[
            {
                price1: "90",
                plantName: "Nosa",
                price2: "120",
                pathImage : "./src/assets/images/BURLE.PNG",
                disText: "25%",
            },
            {
                plantName: "Ficus Twilight",
                price1: "100",
                price2: "110",
                pathImage : "./src/assets/images/FICUS.png",
                disText: "25%",
            },
            {
                plantName: "Rhoeo Plant",
                price1: "90",
                price2: "100",
                pathImage : "./src/assets/images/RHOEO.png",
                disText: "25%",
            },
            {
                plantName: "Ctenanthe burle",
                price1: "120",
                price2: "200",
                pathImage : "./src/assets/images/BURLE.PNG",
                disText: "25%",
            },
        ],
        imageDetail:[
            {
                Image: "./src/assets/images/bgipic.png",
                price1: "120",  
                price2: "200",
                plantName: "Burle",
            }
        ]
    }),
     
  })