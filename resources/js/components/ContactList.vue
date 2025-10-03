<template>
    <section class="max-w-xl px-10 mx-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold mb-6">Contact Manager</h1>
            <a href="/admin/contact" class="underline text-blue-400 text-sm">Go To Admin</a>
        </div>
        <h2 class="text-xl font-semibold mb-4">Contacts</h2>
        <ul v-if="contacts.length > 0 && contacts" class="space-y-3">
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

        <div v-else>
            <div class="rounded-xl bg-gray-100 p-3 text-gray-600 text-sm">
                No contacts
            </div>
            <div class="mt-3 underline text-blue-400 text-sm text-center">
                <a href="/admin/contact">Click here to add</a>
            </div>
        </div>
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
