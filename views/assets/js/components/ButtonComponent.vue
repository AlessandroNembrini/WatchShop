<template>
    <div class="myButton">
        <a :href="href" class="myButton__ancor">{{ text }}</a>
    </div>
</template>

<script>
export default {
    props: ["href", "text"]
}
</script>