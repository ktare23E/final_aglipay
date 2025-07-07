<template>
    <div class="p-8">
        <div class="max-w-4xl mx-auto p-6 text-sm space-y-6 border">
            <h2 class="text-center font-bold">Diocese of Ozamiz<br>IGLESIA FILIPINA INDEPENDIENTE</h2>
            <h3 class="text-center font-bold uppercase">Requirements for the Administration of the Sacrament of Confirmation
            </h3>

            <ul class="list-disc pl-8">
                <li>Photocopy of the Baptismal Certificate</li>
                <li>Copy of the Marriage Contract of the Parents of the Person if Available</li>
                <li>Certificate of Church Membership and the Observance of the 9Point Guidelines</li>
                <li>Attendance / completion of Baptismal Instruction and Service Orientation</li>
            </ul>

            <h3 class="font-bold uppercase">Please accomplish this Confirmation Registration Form eligibly</h3>

            <!-- About the Service -->
            <div>
                <label class="font-semibold">1) About the Service</label>
                <div class="flex gap-4 mt-1">
                    <div class="flex-1">
                        <label>Proposed Date of Baptism</label>
                        <input type="date" class="border-b underline-input w-full outline-none active:border-none" />
                    </div>
                    <div class="flex-1">
                        <label>Proposed Time</label>
                        <input type="time" class="border-b underline-input w-full outline-none" />
                    </div>
                </div>
            </div>

            <!-- About the Applicant -->
            <div>
                <label class="font-semibold">2) About the Applicant</label>
                <div class="grid grid-cols-2 gap-4 mt-1">
                    <div>
                        <label>Name of Person</label>
                        <input type="text" class="border-b underline-input w-full outline-none" />
                    </div>
                    <div>
                        <label>Date of Birth</label>
                        <input type="date" class="border-b underline-input w-full outline-none" />
                    </div>
                    <div>
                        <label>Place of Birth</label>
                        <input type="text" class="border-b underline-input w-full outline-none" />
                    </div>
                    <div>
                        <label>Date of Baptism</label>
                        <input type="date" class="border-b underline-input w-full outline-none" />
                    </div>
                    <div>
                        <label>Place of Baptism</label>
                        <input type="text" class="border-b underline-input w-full outline-none" />
                    </div>
                </div>
            </div>

            <!-- About the Parents -->
            <div>
                <label class="font-semibold">3) About the Parents</label>
                <div class="grid grid-cols-2 gap-4 mt-1">
                    <div>
                        <label>Father</label>
                        <input type="text" class="border-b underline-input w-full outline-none" />
                    </div>
                    <div>
                        <label>Mother</label>
                        <input type="text" class="border-b underline-input w-full outline-none" />
                    </div>
                    <div>
                        <label>Place of Birth</label>
                        <input type="text" class="border-b underline-input w-full outline-none" />
                    </div>
                    <div>
                        <label>Residence</label>
                        <input type="text" class="border-b underline-input w-full outline-none" />
                    </div>
                </div>
            </div>

            <!-- About the Grandparents -->
            <div>
                <label class="font-semibold">4) About the Grandparents</label>
                <div class="grid grid-cols-2 gap-4 mt-1">
                    <div>
                        <label>Paternal Grandparents</label>
                        <input type="text" class="border-b underline-input w-full outline-none" />
                    </div>
                    <div>
                        <label>and</label>
                        <input type="text" class="border-b underline-input w-full outline-none" />
                    </div>
                    <div>
                        <label>Maternal Grandparents</label>
                        <input type="text" class="border-b underline-input w-full outline-none" />
                    </div>
                    <div>
                        <label>and</label>
                        <input type="text" class="border-b underline-input w-full outline-none" />
                    </div>
                </div>
            </div>

            <!-- About the Sponsors -->
            <div>
                <label class="font-semibold">5) About the Sponsors</label>
                <div class="grid grid-cols-3 gap-4 mt-1 font-semibold">
                    <span>Name</span>
                    <span>Religious Affiliation</span>
                    <span>Civil Status</span>
                </div>
                <div class="grid grid-cols-3 gap-4 mt-1" v-for="n in 3" :key="n">
                    <input type="text" class="border-b underline-input w-full outline-none" />
                    <input type="text" class="border-b underline-input w-full outline-none" />
                    <input type="text" class="border-b underline-input w-full outline-none" />
                </div>
            </div>

            <!-- For Parish Office To Fill Up -->
            <div class="border-t pt-4 mt-6 text-xs">
                <p class="font-semibold">For Parish Office To Fill Up:</p>
                <ul class="list-disc pl-5">
                    <li>Documents Lacking: ___________________ *Advised to Return/See the Priest on (_________)</li>
                    <li>Date of Confirmation Instruction/Service Orientation with Parish Priest</li>
                    <li>Final Schedule of Confirmation Service (Date: _________ Time: _________)</li>
                    <li>Financial Obligations (Service Fees: _______) Jurisdiction Fees: (_________)</li>
                    <li>Registration Entry: (Book Number: ________) (Page Number: ________)</li>
                </ul>
                <div class="flex justify-between mt-4">
                    <div>
                        <label>Received by:</label>
                        <input type="text" class="border-b underline-input w-32 outline-none ml-2" />
                    </div>
                    <div>
                        <label>Date:</label>
                        <input type="date" class="border-b underline-input w-32 outline-none ml-2" />
                    </div>
                    <div>
                        <label>Officiated by:</label>
                        <input type="text" class="border-b underline-input w-40 outline-none ml-2" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script setup>
// No script logic for now, just template structure
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