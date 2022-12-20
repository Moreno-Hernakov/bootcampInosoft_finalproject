<template>
  <div class="bg-[#E4E9F7]">
    <!-- title -->
    <div class="px-10 text-3xl font-semibold text-gray-500 py-7 text-start">Dashboard Sidebar</div>

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

    <div class="flex justify-end gap-3 pr-10">
      <div data-bs-toggle="modal" data-bs-target="#sendEmail"
        class="group border-2 border-gray-400 bg-whit px-2.5 py-1.5 rounded-md cursor-pointer hover:bg-teal-500 hover:text-white hover:border-teal-500 transition duration-300 flex items-center gap-1 cursor-pointer">
        <i class='text-2xl text-teal-400 bx bx-mail-send group-hover:text-white'></i>
        <h1 class="text-sm">Send Email</h1>
      </div>

      <!-- modal -->
      <div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
        id="sendEmail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="relative w-auto pointer-events-none modal-dialog modal-lg modal-dialog-centered">
          <div
            class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding">

            <div class="text-center">
              <p class="font-semibold text-md py-7">Send Mail</p>
            </div>

            <div class="px-10">
              <div class="flex justify-between my-3">
                <div class="flex flex-col gap-5">
                  <p class="text-sm">Contractor</p>
                  <p class="text-lg">Qube Logistic</p>
                </div>
                <p class="text-sm">Constractor Email</p>
              </div>

              <div class="my-5">
                <label>Recipients</label>
                <div class="relative inline-block w-full">
                  <select
                    class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                    <option></option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                  <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                  </div>
                </div>
              </div>

              <div class="mb-10">
                <h1>Attatchment</h1>
                <div class="flex gap-3">
                  <i class='text-2xl text-teal-500 -rotate-45 bx bx-paperclip'></i>
                  <h1 class="text-teal-500 text-md">RRIN-2021-0054 DN.pdf</h1>
                </div>
              </div>
            </div>

            <div class="flex justify-end gap-5 mx-5 my-5">
              <div>
                <label data-bs-dismiss="modal"
                  class="relative px-6 py-2 font-semibold border-2 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
                  <span class="relative text-base">Cancel</span>
                </label>
              </div>
              <div>
                <label
                  class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                  <span class="relative text-base text-white">Submit</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="group border-2 border-gray-400 bg-whit px-2.5 py-1.5 rounded-md cursor-pointer hover:bg-teal-500 hover:text-white hover:border-teal-500 transition duration-300 flex items-center gap-1">
        <i class='text-2xl text-teal-400 bx bxs-file-export group-hover:text-white '></i>
        <h1 class="text-sm">Export</h1>
      </div>
    </div>


    <!-- content -->
    <div class="w-full px-10 mt-5">
      <div class="bg-white dark:text-white">

        <div class="flex justify-between w-full px-5 pt-5 border-b">
          <router-link to="/" class="flex items-center gap-3">
            <i class='text-2xl font-bold text-teal-500 bx bx-chevron-left'></i>
            <h1 class="font-semibold">Back</h1>
          </router-link>

          <div class="flex gap-3 mb-3">
            <div data-bs-toggle="modal" data-bs-target="#terminate"
              class="group border-2 border-gray-200 px-2.5 py-1.5 rounded-md cursor-pointer hover:bg-teal-500 hover:text-white hover:border-teal-500 transition duration-300 flex items-center gap-1">
              <i class='text-2xl text-red-400 bx bx-block group-hover:text-white group-hover:text-red-400'></i>
              <h1 class="text-sm">Terminate</h1>
            </div>

            <!-- terminate modal -->
            <div
              class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
              id="terminate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="relative w-auto pointer-events-none modal-dialog modal-lg modal-dialog-centered">
                <div
                  class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding">

                  <div class="text-center">
                    <p class="font-semibold text-md py-7">Reason of Cancellation</p>
                  </div>

                  <div class="px-10">
                    <div class="my-3">
                      <p class="text-sm">Cancelled By</p>
                      <p class="text-lg">Winata Admin</p>
                    </div>

                    <div class="my-5">
                      <label>Description</label>
                      <textarea
                        class=" form-control mt-3 block w-full h-48 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0  focus:text-gray-700 focus:bg-white focus:border-teal-300 focus:outline-none"
                        id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
                    </div>

                    <div class="mb-10">
                      <h1 class="mb-3">Attatchment</h1>
                      <label
                        class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                        <span class="relative text-base text-white">
                          <i class='text-xl bx bx-plus'></i>Add Attachments</span>
                      </label>
                    </div>
                  </div>

                  <div class="flex justify-end gap-5 mx-5 my-5">
                    <div>
                      <label data-bs-dismiss="modal"
                        class="relative px-6 py-2 font-semibold border-2 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
                        <span class="relative text-base">Cancel</span>
                      </label>
                    </div>
                    <div>
                      <label
                        class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                        <span class="relative text-base text-white">Submit</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="group border-2 border-gray-200 px-2.5 py-1.5 rounded-md cursor-pointer hover:bg-teal-500 hover:text-white hover:border-teal-500 transition duration-300 flex items-center gap-1">
              <i class='text-2xl text-teal-400 bx bxs-edit group-hover:text-white '></i>
              <h1 class="text-sm">Modify</h1>
            </div>
          </div>
        </div>

        <div class="pb-5 mx-10 my-10 border-b-2">
          <table class="w-full text-start">
            <tr>
              <td>Tipe</td>
              <td>Li No</td>
              <td>Transfer to</td>
              <td>Customer</td>
              <td>Customer PQ</td>
              <td>Status</td>
            </tr>
            <tr>
              <td>
                <div class="flex items-center gap-3 font-bold">
                  <i class='text-2xl text-teal-600 bx bxs-truck'></i>
                  <h1 v-if="result.type == 'LI'">Logistic Instruction</h1>
                  <h1 v-if="result.type == 'SI'">Service Instruction</h1>
                </div>
              </td>
              <td>
                <h1 class="text-lg font-bold">{{ result.instruction_id }}</h1>
              </td>
              <td>
                <div class="flex gap-3">
                  <i class='bx bx-link'></i>
                  <h1>9874-2455-2345</h1>
                </div>
              </td>
              <td>
                <h1 class="text-lg font-bold">{{ result.customer_po }}</h1>
              </td>
              <td></td>
              <td>
                <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                  <span aria-hidden class="absolute inset-0 bg-[#E2EBF9] rounded-full"></span>
                  <span class="relative text-[#637ca0]" v-if="result.status == 0">
                    In Progress
                  </span>
                </span>
              </td>
            </tr>
            <tr>
              <td>
                <h1 class="mt-8"> Attention Of </h1>
              </td>
              <td>
                <h1 class="mt-8"> Assigned Vendor </h1>
              </td>
              <td>
                <h1 class="mt-8"> Vendor Quotation no </h1>
              </td>
              <td>
                <h1 class="mt-8"> Vendor Add </h1>
              </td>
            </tr>
            <tr class="text-lg font-bold">
              <td>{{ result.attention_of }}</td>
              <td>{{ result.assigned_vendor }}</td>
              <td>{{ result.quotation }}</td>
              <td colspan="3">{{ result.vendor_address }}</td>
            </tr>
          </table>
        </div>


        <div class="px-8 mx-5 rounded-md">
          <h1 class="my-4 text-2xl font-bold text-start">Cost Detail</h1>
          <div>
            <div class="px-4 mx-4 sm:-mx-8 sm:px-4 py-overflow-x-auto">
              <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                <table class="min-w-full leading-normal">
                  <thead>
                    <tr>
                      <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 bg-gray-100 border-b-2 border-gray-200 text-start">
                        Description
                      </th>
                      <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 bg-gray-100 border-b-2 border-gray-200 text-start">
                        QTY
                      </th>
                      <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 bg-gray-100 border-b-2 border-gray-200 text-start">
                        UGM
                      </th>
                      <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 bg-gray-100 border-b-2 border-gray-200 text-start">
                        Unit Price
                      </th>
                      <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 bg-gray-100 border-b-2 border-gray-200 text-start">
                        Discount (%)
                      </th>
                      <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 bg-gray-100 border-b-2 border-gray-200 text-start">
                        GSE/GKT(%)
                      </th>
                      <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 bg-gray-100 border-b-2 border-gray-200 text-start">
                        Currency
                      </th>
                      <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 bg-gray-100 border-b-2 border-gray-200 text-start">
                        Vst Account
                      </th>
                      <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 bg-gray-100 border-b-2 border-gray-200 text-start">
                        Sub Total
                      </th>
                      <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 bg-gray-100 border-b-2 border-gray-200 text-start">
                        Total
                      </th>
                      <th
                        class="px-5 py-3 text-xs font-semibold tracking-wider text-gray-600 bg-gray-100 border-b-2 border-gray-200 text-start">
                        Change To
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="px-5 py-5 text-sm bg-white">
                        <p class="text-gray-900 whitespace-no-wrap">Transporttationi from Ringsite</p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-white">
                        <p class="text-gray-900 whitespace-no-wrap">1</p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-white">
                        <p class="text-gray-900 whitespace-no-wrap">
                          Trip
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-white">
                        <p class="text-gray-900 whitespace-no-wrap">
                          1,400.00
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-white">
                        <p class="text-gray-900 whitespace-no-wrap">
                          0
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-white">
                        <p class="text-gray-900 whitespace-no-wrap">
                          5
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-white">
                        <p class="text-gray-900 whitespace-no-wrap">
                          AED
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">
                          70.00
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">
                          1,400.00
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">
                          1,470.00
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">
                          MITME
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-5 py-5 text-sm bg-white" colspan="6">
                        <p class="text-gray-900 whitespace-no-wrap">Exchange Rate <span class="font-bold">1 USD = 3.6725
                            AED</span></p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-gray-100">
                        <p class="text-gray-900 whitespace-no-wrap"><span class="font-bold">AED </span>(total)</p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-gray-100">
                        <p class="text-gray-900 whitespace-no-wrap">
                          70,00
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-gray-100">
                        <p class="text-gray-900 whitespace-no-wrap">
                          1,400.00
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-gray-100">
                        <p class="text-gray-900 whitespace-no-wrap">
                          1,470.00
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-5 py-5 text-sm bg-white" colspan="6">
                      </td>
                      <td class="px-5 py-5 text-sm bg-gray-100">
                        <p class="text-gray-900 whitespace-no-wrap"><span class="font-bold">AED </span>(total)</p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-gray-100">
                        <p class="text-gray-900 whitespace-no-wrap">
                          70,00
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-gray-100">
                        <p class="text-gray-900 whitespace-no-wrap">
                          1,400.00
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-gray-100">
                        <p class="text-gray-900 whitespace-no-wrap">
                          1,470.00
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-5 py-5 text-sm bg-white" colspan="5">
                        <p class="text-gray-900 whitespace-no-wrap">
                          Attachment
                        </p>
                      </td>
                      <td class="px-5 py-5 text-sm bg-white" colspan="6">
                        <p class="text-gray-900 whitespace-no-wrap">
                          Notes
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-5 py-5 text-sm bg-white" colspan="5" rowspan="3">
                        <p class="text-gray-900 whitespace-no-wrap">
                        </p>
                        <div class="flex gap-3 mb-4">
                          <i class='text-2xl text-teal-500 -rotate-45 bx bx-paperclip'></i>
                          <div>
                            <h1 class="text-teal-500 text-md">RRIN-2021-0054 DN.pdf</h1>
                            <p class="text-sm">by James Taylor on 04/05/21 08.13 AM</p>
                          </div>
                        </div>
                        <label
                          class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                          <span class="relative text-base text-white">
                            <i class='text-xl bx bx-plus'></i>Add Attachments</span>
                        </label>
                      </td>
                      <td class="px-5 py-5 text-sm bg-gray-100" colspan="6">
                        <p class="text-gray-900 whitespace-no-wrap">
                          1 x Desert Truck from Rig-Site (1/2)
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="px-5 pb-24 mt-7">
          <div class="flex justify-between">
            <p class="font-bold text-md">Vendor Invoice</p>
            <div>
              <label data-bs-toggle="modal" data-bs-target="#addVendorInvoice"
                class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">
                <span class="relative text-base text-white">
                  <i class='mb-5 text-xl bx bx-plus'></i> Add Attachments</span>
              </label>



              <!-- modal vendor invoice -->
              <div
                class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
                id="addVendorInvoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="relative w-auto pointer-events-none modal-dialog modal-lg modal-dialog-centered">
                  <div
                    class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding">

                    <div class="px-10">
                      <div class="my-12">
                        <label class="block mb-2 tracking-wide text-gray-700" for="grid-first-name">
                          Vendor Invoice No.
                        </label>
                        <input
                          class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-100 border rounded appearance-none focus:outline-none focus:bg-white"
                          id="grid-first-name" type="text" placeholder="Jane">
                      </div>

                      <div class="mb-10">
                        <h1 class="mb-14">Invoice Attatchment</h1>
                        <label
                          class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                          <span class="relative text-base text-white">
                            <i class='text-xl bx bx-plus'></i>Add Attachments</span>
                        </label>
                        <h1 class="my-14">Supporting Document</h1>
                        <label
                          class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                          <span class="relative text-base text-white">
                            <i class='text-xl bx bx-plus'></i>Add Attachments</span>
                        </label>
                      </div>
                    </div>

                    <div class="flex justify-end gap-5 mx-5 my-5">
                      <div>
                        <label data-bs-dismiss="modal"
                          class="relative px-6 py-2 font-semibold border-2 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
                          <span class="relative text-base">Cancel</span>
                        </label>
                      </div>
                      <div>
                        <label
                          class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                          <span class="relative text-base text-white">Submit</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <table class="w-full ">
            <thead class="bg-gray-300 text-start">
              <tr>
                <th class="px-3 py-1 text-white border border-gray-300 text-start ">Invoice No.</th>
                <th class="py-1 text-white border border-gray-300 text-start">Invoice Attachment</th>
                <th class="py-1 text-white border border-gray-300 text-start">Support Document</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr class="border">
                <td class="px-3 py-1">AAL-008</td>
                <td>
                  <div class="flex items-center py-1 text-teal-500">
                    <i class='text-2xl -rotate-45 bx bx-paperclip'></i>
                    <p>AAL_008_Invoice.pdf</p>
                  </div>
                </td>
                <td>
                  <div class="flex items-center gap-2 py-1">
                    <p class="text-white bg-teal-500 rounded-full px-1.5">0</p>
                    <i class='px-1 text-2xl bg-gray-100 rounded-full bx bx-chevron-down hover:bg-gray-300'></i>
                  </div>
                </td>
                <td>
                  <div class="flex items-center justify-end gap-2 px-5 py-1">
                    <i class='text-red-500 bx bxs-trash'></i>
                    <i class='text-teal-600 bx bxs-pencil'></i>
                  </div>
                </td>
              </tr>
              <tr class="border">
                <td colspan="5">
                  <div class="flex w-full gap-2">
                    <div class="flex items-center justify-end w-1/2">
                      <p class="w-64 text-end">Click the button if all vendor invoices have been received</p>
                    </div>
                    <label
                      class="relative px-10 py-4 my-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                      <span class="relative flex items-center text-base text-white">All Received</span>
                    </label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>



        <div>
          <h1 class="px-5 py-3 text-xl font-bold text-gray-600 bg-gray-300">For Internal Only</h1>
          <div class="flex px-5">
            <div class="w-1/2">
              <p class="mt-5 text-sm mb-7">Attachment </p>
              <label data-bs-toggle="modal" data-bs-target="#internalNote"
                class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                <span class="relative text-base text-white">
                  <i class='mb-5 text-xl bx bx-plus'></i> Add Attachments</span>
              </label>

              <!-- modal internal note -->
              <div
                class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
                id="internalNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="relative w-auto pointer-events-none modal-dialog modal-lg modal-dialog-centered">
                  <div
                    class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding">

                    <div class="text-center">
                      <p class="font-semibold text-md py-7">Internal Note</p>
                    </div>

                    <div class="m-5">
                      <label>Description</label>
                      <textarea class="
        form-control
        mt-3
        block
        w-full
        h-48
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-teal-300 focus:outline-none
      " id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
                    </div>

                    <div class="flex justify-end gap-5 mx-5 my-5">
                      <div>
                        <label data-bs-dismiss="modal"
                          class="relative px-6 py-2 font-semibold border-2 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
                          <span class="relative text-base">Cancel</span>
                        </label>
                      </div>
                      <div>
                        <label
                          class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                          <span class="relative text-base text-white">Submit</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="pl-8 border-l-2">
              <p class="mt-5 text-sm mb-7">Internal Note </p>
              <label
                class="relative px-6 py-2 font-semibold bg-teal-500 rounded group h-14 before:rounded before:absolute before:inset-0 before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                <span class="relative text-base text-white">
                  <i class='text-xl bx bx-plus'></i> Add Attachments Note</span>
              </label>
            </div>
            <div>

            </div>
          </div>
        </div>

        <div class="px-5">
          <p class="mt-10 text-xl font-bold">View Activity Note</p>

        </div>

      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: 'DetailInstruction',
  mounted() {
    this.getData();
  },
  data() {
    return {
      result:{},
      show: false,
    };
  },
  methods: {
    getData() {
      axios
        .get("instruction/detail_instruction/"+ this.$route.params.id)
        .then((res) => {
          this.result = res.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
}
</script>
