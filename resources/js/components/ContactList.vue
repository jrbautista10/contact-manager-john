<template>
    <section class="max-w-xl px-10 mx-auto">
        <h1 class="text-3xl font-bold mb-6">Contact Manager</h1>
        <h2 class="text-xl font-semibold mb-4">Contacts</h2>
        <ul class="space-y-3">
            <li v-for="contact in contacts" :key="contact.id" class="flex items-center space-x-4 p-3 rounded-2xl bg-white shadow-sm">
                <img
                        v-if="contact.image"
                        :src="`/storage/${contact.image}`"
                        alt="contact image"
                        class="w-12 h-12 rounded-full object-cover border"
                />
                <div>
                    <p class="font-semibold">{{ contact.name }}</p>
                    <a :href="`mailto:${contact.email}`" class="text-gray-500 underline text-sm">{{ contact.email }}</a>
                </div>
            </li>
        </ul>
    </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const contacts = ref([])

onMounted(async () => {
    try {
        const res = await axios.get('/api/contacts')
        contacts.value = res.data
    } catch (error) {
        console.error('Error fetching contacts:', error)
    }
})
</script>
