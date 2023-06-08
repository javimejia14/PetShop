<template>
    <pre>
        {{ images }}
    </pre>
    <div>
        <img
        v-for="image in images"
        :key="image.id"
        :src="image.url"
        :alt="image.name"
        width="200px"
    />
    </div>
</template>
<script>
import { ref } from "vue";
export default {
    setup() {
        const images = ref([
            {
                id: 1,
                url: require("https://bit.ly/3qplMTM"),
                name: "Perrito 1",
            },
            {
                id: 2,
                url: require("https://bit.ly/3qplMTM"),
                name: "Perrito 2",
            }, 
            {
                id: 3,
                url: require("https://bit.ly/3qplMTM"),
                name: "Perrito 3",
            },
            {
                id: 4,
                url: require("https://bit.ly/3qplMTM"),
                name: "Perrito 4",
            },
            {
                id: 5,
                url: require("https://bit.ly/3qplMTM"),
                name: "Perrito 5",
            },
            {
                id: 6,
                url: require("https://bit.ly/3qplMTM"),
                name: "Perrito 6",
            },
        ]);
        return { images };
    },
};
</script>
