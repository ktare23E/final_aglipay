<template>
    <div class="p-8">
        <div class="max-w-3xl mx-auto p-6 text-sm space-y-4 border">
            <div class="text-center">
                <h2 class="font-bold">Diocese of Ozamiz<br>IGLESIA FILIPINA INDEPENDIENTE</h2>
                <p>(Philippine Independent Church)</p>
                <p class="mt-2">Parish/Mission of <input type="text" class="border-b underline-input border-black w-64 outline-none" /></p>
            </div>

            <div class="text-center mt-6">
                <h3 class="font-bold text-lg uppercase">Certificate of Baptism</h3>
                <p>in the Name of God: Father, Son and the Holy Spirit, Amen.</p>
            </div>

            <p class="mt-4">This is to certify that</p>
            <input type="text" class="border-b underline-input border-black w-full outline-none" />

            <p class="mt-4">
                was received into the membership of Christ’s Body by <strong>HOLY BAPTISM</strong><br />
                according to the Rite of the Iglesia Filipina Independiente, and whose name is in the Book of Baptism
                registers the following entries:
            </p>

            <!-- Baptism info -->
            <div class="grid grid-cols-2 gap-6 mt-4">
                <div>
                    <label>Book of Baptism No.</label>
                    <input type="text" class="border-b underline-input border-black w-full outline-none" />
                </div>
                <div>
                    <label>Page No./Series of</label>
                    <input type="text" class="border-b underline-input border-black w-full outline-none" />
                </div>
                <div>
                    <label>Date of Baptism</label>
                    <input type="date" class="border-b underline-input border-black w-full outline-none" />
                </div>
                <div>
                    <label>Place of Baptism</label>
                    <input type="text" class="border-b underline-input border-black w-full outline-none" />
                </div>
            </div>

            <!-- Personal details -->
            <div class="grid grid-cols-2 gap-6 mt-4">
                <div>
                    <label>Full Name</label>
                    <input type="text" class="border-b underline-input border-black w-full outline-none" />
                </div>
                <div>
                    <label>Date of Birth</label>
                    <input type="date" class="border-b underline-input border-black w-full outline-none" />
                </div>
                <div>
                    <label>Place of Birth</label>
                    <input type="text" class="border-b underline-input border-black w-full outline-none" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6 mt-4">
                <div>
                    <label>Name of Father</label>
                    <input type="text" class="border-b underline-input border-black w-full outline-none" />
                </div>
                <div>
                    <label>Name of Mother</label>
                    <input type="text" class="border-b underline-input border-black w-full outline-none" />
                </div>
            </div>

            <div class="mt-4">
                <label>Sponsor</label>
                <input type="text" class="border-b underline-input border-black w-full outline-none" />
            </div>

            <div class="mt-6">
                <label>Officiant</label>
                <input type="text" class="border-b underline-input border-black w-full outline-none" />
            </div>

            <div class="mt-4">
                <p>
                    Issued this
                    <input type="text" class="border-b underline-input border-black w-16 mx-1 outline-none text-center" /> day of
                    <input type="text" class="border-b underline-input border-black w-32 mx-1 outline-none text-center" />, in the year of
                    the Lord,
                    <input type="text" class="border-b underline-input border-black w-20 mx-1 outline-none text-center" />.
                </p>
                <p class="mt-2">
                    Purpose: <input type="text" class="border-b underline-input border-black w-96 outline-none" />
                </p>
            </div>

            <!-- Footer -->
            <div class="mt-6 flex justify-between">
                <div>
                    <p>Verified by:</p>
                    <p>Amount Paid: <input type="text" class="border-b underline-input border-black w-32 outline-none" /></p>
                    <p>OR Number: <input type="text" class="border-b underline-input border-black w-32 outline-none" /></p>
                    <p>Date Paid: <input type="date" class="border-b underline-input border-black w-40 outline-none" /></p>
                </div>
                <div class="text-center">
                    <p>__________________________</p>
                    <p>Parish Priest</p>
                </div>
            </div>

            <p class="text-xs italic mt-6">
                Note: This certification is invalid if not stamped with the parish seal and has marks<br />
                of erasure or alternation on any entry.
            </p>
        </div>
    </div>
</template>

<script setup>
// No logic required at this stage
</script>

<style scoped>
input {
    background: transparent;
}
.underline-input {
    border: none;
    border-bottom: 1px solid black;
    background: transparent;
    outline: none;
    padding: 2px 4px;
}

.underline-input:focus {
  outline: none;
  box-shadow: none;
}
</style>