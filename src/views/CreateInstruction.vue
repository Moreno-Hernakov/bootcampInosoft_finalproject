<template>
  <div class="bg-[#E4E9F7]  py-10 dark:bg-zinc-900 dark:text-white">
    <!-- title -->
    <div class="text-3xl font-semibold text-gray-500 px-10 pb-7 text-start">Dashboard Sidebar</div>

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
    <div class="px-10 w-full mt-5">

      <div class="bg-white dark:bg-zinc-800">
        <div class="mx-10 my-10  border-b-2 pb-5 pt-10">
          <table class="text-start w-full mb-6">
            <tr>
              <td colspan="5">
                <select class="fa px-2 py-2 bg-white border border-gray-300 focus:border-gray-200 rounded-lg dark:bg-zinc-800 dark:text-white dark:border-gray-600 dark:focus:border-gray-800 " style="option{color:red;}">
                  <option class="fa">&#xf0d1; Logistic Instruction </option>
                  <option class="fa">&#xf085; Service Instruction </option>
                </select>
              </td>
              <td class="flex justify-end">
                <button class="rounded-full bg-gray-100 border border-gray-300 px-10 dark:bg-zinc-700 dark:text-white dark:border-gray-500">Draft</button>
              </td>
            </tr>
            <tr>
              <td class="w-1/6"></td>
              <td class="px-2 w-1/6">
                <h1>Assigned Vendor</h1>
                <div class="inline-block relative w-full">
                  <select
                    class="block appearance-none w-full bg-gray-100 text-gray-500 border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-md leading-tight focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-800">
                    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                    <option>Enter Vendor</option>
                    <option>Enter Vendor 1</option>
                    <option>Enter Vendor 2</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    </svg>
                  </div>
                </div>
              </td>
              <td class="px-2 w-1/6">
                <h1 for="attention">Attention Of</h1>
                <input type="text" name="attention" id="attention" placeholder="Enter Attention Of"
                  class="rounded-md border border-gray-300 bg-gray-100 py-1.5 px-6 text-gray-500 outline-none focus:border-gray-700 focus:shadow-sm hover:border-gray-400 w-[97%] dark:bg-zinc-800 dark:border-gray-500 dark:text-gray-200">
              </td>
              <td class="px-2 w-1/6">
                <h1 for="quotation">Quotion Of</h1>
                <input type="text" name="quotation" id="quotation" placeholder="Enter Quotation"
                  class="rounded-md border border-gray-300 bg-gray-100 py-1.5 px-6 text-gray-500 outline-none focus:border-gray-700 focus:shadow-sm hover:border-gray-400 w-[97%] dark:bg-zinc-800 dark:border-gray-500  dark:text-gray-200">
              </td>
              <td class="px-2 w-1/6">
                <h1>Assigned Vendor</h1>
                <div class="inline-block relative w-full">
                  <select
                    class="block appearance-none w-full bg-gray-100 text-gray-500 border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-md leading-tight focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500">
                    <option>Enter Vendor</option>
                    <option>Enter Vendor 1</option>
                    <option>Enter Vendor 2</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    </svg>
                  </div>
                </div>
              </td>
              <td class="px-2 w-1/6">
                <h1>Assigned Vendor</h1>
                <div class="inline-block relative w-full">
                  <select
                    class="block appearance-none w-full bg-gray-100 text-gray-500 border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-md leading-tight focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-500">
                    <option>Enter Vendor</option>
                    <option>Enter Vendor 1</option>
                    <option>Enter Vendor 2</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    </svg>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="mt-10">
              <td class="mt-10"></td>
              <td colspan="4" class="px-2 w-1/6">
                <h1 class="mt-6">Assigned Vendor</h1>
                <div class="inline-block relative w-full">
                  <select
                    class="block appearance-none w-full bg-gray-100 text-gray-500 border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-md leading-tight focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-500">
                    <option>Enter Vendor</option>
                    <option>Enter Vendor 1</option>
                    <option>Enter Vendor 2</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    </svg>
                  </div>
                </div>
              </td>
              <td class="px-2">
                <h1 for="quotation" class="mt-6">Quotion Of</h1>
                <input type="text" name="quotation" id="quotation" placeholder="Enter Quotation"
                  class="rounded-md border border-gray-300 bg-gray-100 py-1.5 px-6 text-gray-500 outline-none focus:border-gray-700 focus:shadow-sm hover:border-gray-400 outline-w-[97%] dark:bg-zinc-800 dark:border-gray-500 dark:text-gray-200">
              </td>
            </tr>
          </table>
        </div>
        <div class="mx-5 px-8 rounded-md">
          <h1 class="font-bold text-2xl  text-start my-4">Cost Detail</h1>
          <div>
            <div class="mx-4 sm:-mx-8 px-4 sm:px-4 py-overflow-x-auto">
              <div class="inline-block min-w-full  overflow-hidden">
                <table class=" leading-normal w-full dark:text-white">
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
                        <div class="inline-block relative w-26">
                          <select
                            class="block appearance-none w-full bg-gray-100 text-gray-800 border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-md leading-tight focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-500 dark:text-gray-500">
                            <option>SHP</option>
                            <option>SHP</option>
                            <option>SHP</option>
                          </select>
                          <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
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
                      <td class="px-1 py-2 w-10 border-b">
                        <i class='bx bxs-right-arrow-alt text-2xl font-bold text-gray-400'></i>
                      </td>
                      <td class="px-1 py-2 border-b">
                        <div class="inline-block relative w-24">
                          <select
                            class="block appearance-none w-full bg-gray-100 text-gray-800 border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-md leading-tight focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-500 dark:text-white">
                            <option>...</option>
                            <option></option>
                            <option></option>
                          </select>
                          <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
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
                        <div class="inline-block relative w-48">
                          <select
                            class="block appearance-none w-full bg-gray-100 text-gray-800 border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-md leading-tight focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-800 dark:text-gray-500">
                            <option>Select an Option</option>
                            <option>MITO</option>
                            <option>Custom</option>
                          </select>
                          <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            </svg>
                          </div>
                        </div>
                      </td>
                      <td class="border-b px-2 py-2">
                        <i class='bx bx-minus bg-gray-300 px-4 py-4 mt-1 rounded-lg hover:bg-gray-400 dark:bg-gray-600'></i>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="12" class="border-b px-2 py-1">
                        <div class="flex justify-end">
                          <i class='bx bx-plus bg-teal-400 text-white px-4 py-4 mt-1 rounded-lg hover:bg-teal-600'></i>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <div class="flex gap-5 pb-10">
                  <div class="w-1/2">
                    <h1 class="my-6">Attatchment</h1>
                    <label data-bs-toggle="modal" data-bs-target="#"
                      class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">
                      <span class="relative text-base text-white">
                        <i class='bx bx-plus text-xl mb-5'></i> Add Attachments</span>
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

      <div class="bg-white mt-5 p-5 dark:bg-zinc-800">
        <h1>Link To</h1>
        <div class="inline-block relative w-1/3">
          <select
            class="block appearance-none w-full bg-gray-100 text-gray-800 border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-md leading-tight focus:outline-none focus:shadow-outline focus:border-800 dark:bg-zinc-800 dark:border-gray-500 dark:focus:ring-gray-50 dark:text-gray-200">
            <option>SHP</option>
            <option>SHP</option>
            <option>SHP</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            </svg>
          </div>
        </div>
      </div>

      <div class="bg-white mt-5 p-5 flex gap-5 justify-end dark:bg-zinc-800">
        <div>
          <label
            class="relative group h-14 px-16 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
            <span class="relative text-base">
              Cancel</span>
          </label>
        </div>
        <div>
          <label
            class="relative group h-14 border-2 px-10 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
            <span class="relative text-base">
              Save as Draft</span>
          </label>
        </div>
        <div>
          <label
            class="relative group h-14 bg-teal-500 px-20 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">
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
  data() {
    return {
      show: false,
    };
  },
}
</script>
