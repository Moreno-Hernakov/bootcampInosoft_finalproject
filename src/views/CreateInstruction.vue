<template>
  <div class="bg-[#E4E9F7]  py-10 dark:bg-zinc-900 dark:text-white">
    <!-- title -->
    <div class="px-10 text-3xl font-semibold text-gray-500 pb-7 text-start">Dashboard Sidebar</div>

    <!-- Breadcrumb -->
    <div class="pl-10">
      <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center">
            <a href="#"
              class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
              <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                </path>
              </svg>
              Vendor Management
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <a href="#"
                class="ml-1 text-sm font-medium text-teal-500 hover:text-teal-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">3rd
                Party Instruction</a>
            </div>
          </li>
        </ol>
      </nav>

    </div>

    <!-- content -->
    <div class="w-full px-10 mt-5">

      <div class="bg-white dark:bg-zinc-800">
        <div class="pt-10 pb-5 mx-10 my-10 border-b-2">
          <table class="w-full mb-6 text-start">
            <tr>
              <td colspan="5">
                <select class="px-2 py-2 text-teal-400 bg-white border border-gray-300 rounded-lg w-60 fa focus:border-gray-200 dark:bg-zinc-800 dark:text-white dark:border-gray-600 dark:focus:border-gray-800" style="option{color:red;}" v-model="type">
                  <option class="fa" value="logistic">&#xf0d1; Logistic Instruction </option>
                  <option class="fa" value="service">&#xf085; Service Instruction </option>
                </select>
              </td>
              <td class="flex justify-end">
                <button class="px-10 bg-gray-100 border border-gray-300 rounded-full dark:bg-zinc-700 dark:text-white dark:border-gray-500">Draft</button>
              </td>
            </tr>
            <tr>
              <td class="w-1/6"></td>
              <td class="w-1/6 px-2">
                <h1>Assigned Vendor</h1>
                <div class="relative inline-block w-full">
                  <select
                    class="block w-full px-4 py-2 pr-8 leading-tight text-gray-500 bg-gray-100 border border-gray-300 rounded-md appearance-none hover:border-gray-400 focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-800">
                    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                    <option>Select Vendor</option>
                    <option v-for="asv in assigned_vendor" :key="asv._id" :value="asv.assigned_vendor">{{asv.assigned_vendor}}</option>
                  </select>
                  <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    </svg>
                  </div>
                </div>
              </td>
              <td class="w-1/6 px-2">
                <h1 for="attention">Attention Of</h1>
                <input type="text" name="attention" id="attention" placeholder="Enter Attention Of"
                  class="rounded-md border border-gray-300 bg-gray-100 py-1.5 px-6 text-gray-500 outline-none focus:border-gray-700 focus:shadow-sm hover:border-gray-400 w-[97%] dark:bg-zinc-800 dark:border-gray-500 dark:text-gray-200">
              </td>
              <td class="w-1/6 px-2">
                <h1 for="quotation">Quotation No</h1>
                <input type="text" name="quotation" id="quotation" placeholder="Enter Quotation"
                  class="rounded-md border border-gray-300 bg-gray-100 py-1.5 px-6 text-gray-500 outline-none focus:border-gray-700 focus:shadow-sm hover:border-gray-400 w-[97%] dark:bg-zinc-800 dark:border-gray-500  dark:text-gray-200">
              </td>
              <td class="w-1/6 px-2">
                <h1>Invoice To</h1>
                <div class="relative inline-block w-full">
                  <select
                    class="block w-full px-4 py-2 pr-8 leading-tight text-gray-500 bg-gray-100 border border-gray-300 rounded-md appearance-none hover:border-gray-400 focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500">
                    <option>Select an option</option>
                    <option>to 1</option>
                    <option>to 2</option>
                    <option>to 3</option>
                    <option>to 4</option>
                    <option>to 5</option>
                  </select>
                  <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    </svg>
                  </div>
                </div>
              </td>
              <td class="w-1/6 px-2">
                <h1>Customer - Contract</h1>
                <div class="relative inline-block w-full">
                  <select
                    class="block w-full px-4 py-2 pr-8 leading-tight text-gray-500 bg-gray-100 border border-gray-300 rounded-md appearance-none hover:border-gray-400 focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-500">
                    <option>Select Customer</option>
                    <option>customer 1</option>
                    <option>customer 2</option>
                    <option>customer 3</option>
                    <option>customer 4</option>
                    <option>customer 5</option>
                  </select>
                  <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    </svg>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="mt-10">
              <td class="mt-10"></td>
              <td colspan="4" class="w-1/6 px-2">
                <h1 class="mt-6">Vendor Address</h1>
                <div class="relative inline-block w-full">
                  <select
                    class="block w-full px-4 py-2 pr-8 leading-tight text-gray-500 bg-gray-100 border border-gray-300 rounded-md appearance-none hover:border-gray-400 focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-500">
                    <option>Enter Vendor Address</option>
                    <option v-for="va in vendor_address" :key="va._id" :value="va.vendor_address">{{va.vendor_address}}</option>
                  </select>
                  <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    </svg>
                  </div>
                </div>
              </td>
              <td class="px-2">
                <h1 for="quotation" class="mt-6">Customer PO No.</h1>
                <input type="text" name="quotation" id="quotation" placeholder="Enter Customer PO"
                  class="rounded-md border border-gray-300 bg-gray-100 py-1.5 px-6 text-gray-500 outline-none focus:border-gray-700 focus:shadow-sm hover:border-gray-400 outline-w-[97%] dark:bg-zinc-800 dark:border-gray-500 dark:text-gray-200">
              </td>
            </tr>
          </table>
        </div>
        <div class="px-8 mx-5 rounded-md">
          <h1 class="my-4 text-2xl font-bold text-start">Cost Detail</h1>
          <div>
            <div class="px-4 mx-4 sm:-mx-8 sm:px-4 py-overflow-x-auto">
              <div class="inline-block min-w-full overflow-hidden">
                <table class="w-full leading-normal dark:text-white">
                  <thead>
                    <tr class="text-white bg-gray-300 text-start dark:bg-gray-700">
                      <th class="text-start py-1.5 pl-4 w-44 rounded-tl-xl">Description</th>
                      <th class="text-start py-1.5 w-32">QTY</th>
                      <th class="text-start py-1.5 w-24">UOM</th>
                      <th class="text-start py-1.5 w-32">Unit Price</th>
                      <th class="text-start py-1.5 w-24">GST (%)</th>
                      <th class="text-start py-1.5 w-10"></th>
                      <th class="text-start py-1.5 w-40">Currency</th>
                      <th class="text-start py-1.5 w-48 ">Visit Amount</th>
                      <th class="text-start py-1.5 w-48 ">Sub Total</th>
                      <th class="text-start py-1.5 w-24 ">Total</th>
                      <th class="text-start py-1.5">Change To</th>
                      <th class="text-start py-1.5 rounded-tr-xl"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="px-1 py-2 border-b">
                        <input type="text" name="desc" id="desc" placeholder="Enter Description"
                          class="rounded-md border border-gray-300 bg-gray-100 py-1.5 px-1 text-gray-500 outline-none focus:border-gray-700 focus:shadow-sm hover:border-gray-400 w-52 dark:bg-zinc-800 dark:border-gray-500 dark:text-gray-200">
                      </td>
                      <td class="px-1 py-2 border-b">
                        <input type="text" name="desc" id="desc" placeholder="Enter QTY"
                          class="rounded-md border border-gray-300 bg-gray-100 py-1.5 px-1 text-gray-500 outline-none focus:border-gray-700 focus:shadow-sm hover:border-gray-400 w-32 dark:bg-zinc-800 dark:border-gray-500 dark:text-gray-200">
                      </td>
                      <td class="px-1 py-2 border-b">
                        <div class="relative inline-block w-26">
                          <select
                            class="block w-full px-4 py-2 pr-8 leading-tight text-gray-800 bg-gray-100 border border-gray-300 rounded-md appearance-none hover:border-gray-400 focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-500 dark:text-gray-500">
                            <option>SHP</option>
                            <option>SHP</option>
                            <option>SHP</option>
                          </select>
                          <div
                            class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            </svg>
                          </div>
                        </div>
                      </td>
                      <td class="px-1 py-2 border-b">
                        <input type="text" name="desc" id="desc" placeholder="Enter Unit Price"
                          class="rounded-md border border-gray-300 bg-gray-100 py-1.5 px-2 text-gray-500 outline-none focus:border-gray-700 focus:shadow-sm hover:border-gray-400 w-40 dark:bg-zinc-800 dark:border-gray-500 dark:text-gray-200">
                      </td>
                      <td class="px-1 py-2 border-b">
                        <input type="text" name="desc" id="desc" placeholder="0"
                          class="rounded-md border border-gray-300 bg-gray-100 py-1.5 px-2 text-gray-500 outline-none focus:border-gray-700 focus:shadow-sm hover:border-gray-400 w-24 dark:bg-zinc-800 dark:border-gray-500 dark:text-gray-200">
                      </td>
                      <td class="w-10 px-1 py-2 border-b">
                        <i class='text-2xl font-bold text-gray-400 bx bxs-right-arrow-alt'></i>
                      </td>
                      <td class="px-1 py-2 border-b">
                        <div class="relative inline-block w-24">
                          <select
                            class="block w-full px-4 py-2 pr-8 leading-tight text-gray-800 bg-gray-100 border border-gray-300 rounded-md appearance-none hover:border-gray-400 focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-500 dark:text-white">
                            <option>...</option>
                            <option></option>
                            <option></option>
                          </select>
                          <div
                            class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            </svg>
                          </div>
                        </div>
                      </td>
                      <td class="px-1 py-2 border-b">
                        <p class="w-12">0.00</p>
                      </td>
                      <td class="px-1 py-2 border-b">
                        <p class="w-12">0.00</p>
                      </td>
                      <td class="px-1 py-2 border-b">
                        <p class="w-12">0.00</p>
                      </td>
                      <td class="px-2 py-2 border-b">
                        <div class="relative inline-block w-48">
                          <select
                            class="block w-full px-4 py-2 pr-8 leading-tight text-gray-800 bg-gray-100 border border-gray-300 rounded-md appearance-none hover:border-gray-400 focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-800 dark:text-gray-500">
                            <option>Select an Option</option>
                            <option>MITME</option>
                            <option>Customer</option>
                          </select>
                          <div
                            class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            </svg>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-2 border-b">
                        <i class='px-4 py-4 mt-1 bg-gray-300 rounded-lg bx bx-minus hover:bg-gray-400 dark:bg-gray-600'></i>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="12" class="px-2 py-1 border-b">
                        <div class="flex justify-end">
                          <i class='px-4 py-4 mt-1 text-white bg-teal-400 rounded-lg bx bx-plus hover:bg-teal-600'></i>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <div class="flex gap-5 pb-10">
                  <div class="w-1/2">
                    <h1 class="my-6">Attatchment</h1>
                    <label data-bs-toggle="modal" data-bs-target="#"
                      class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">
                      <span class="relative text-base text-white">
                        <i class='mb-5 text-xl bx bx-plus'></i> Add Attachments</span>
                    </label>
                  </div>
                  <div class="w-full px-2">
                    <p class="mt-4">Notes</p>
                    <textarea
                      class=" form-control mt-1 block w-full h-48 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0  focus:text-gray-700 focus:bg-white focus:border-green-300 focus:outline-none dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-800 dark:text-gray-300"
                      id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="p-5 mt-5 bg-white dark:bg-zinc-800">
        <h1>Link To</h1>
        <div class="relative inline-block w-1/3">
          <select
            class="block w-full px-4 py-2 pr-8 leading-tight text-gray-800 bg-gray-100 border border-gray-300 rounded-md appearance-none hover:border-gray-400 focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-50 dark:text-gray-200">
            <option>SHP</option>
            <option>SHP</option>
            <option>SHP</option>
          </select>
          <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            <!-- </svg> -->
          </div>
        </div>
      </div>

      <div class="flex justify-end gap-5 p-5 mt-5 bg-white dark:bg-zinc-800">
        <div>
          <label
            class="relative px-16 py-2 font-semibold rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
            <span class="relative text-base">
              Cancel</span>
          </label>
        </div>
        <div>
          <label
            class="relative px-10 py-2 font-semibold border-2 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
            <span class="relative text-base">
              Save as Draft</span>
          </label>
        </div>
        <div>
          <label
            class="relative px-20 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">
            <span class="relative text-base text-white">
              Submit</span>
          </label>
        </div>
      </div>
    </div>

  </div>
</template>


<script>
export default {
  name: 'CreateInstruction',
  mounted() {
    this.getAssignedVendor();
    this.getVendorAddress();
    this.type = this.$route.params.instruction;
  },
  data() {
    return {
      show: false,
      type: 'logistic',
      assigned_vendor: [],
      vendor_address: [],
      customer: [],
      instruct: []
    };
  },
  methods: {
    getAssignedVendor() {
      axios.get('/instruction/get_assigned_vendor').then((res) => {
        this.assigned_vendor = res.data;
      });
    },
    getInstruct() {
      axios.get('/instruction/show_instruction').then((res) => {
        this.instruct = res.data;
      });
    },
    getVendorAddress() {
      axios.get('/instruction/get_assigned_vendor').then((res) => {
        this.vendor_address = res.data;
      });
    },
  },
}
</script>
