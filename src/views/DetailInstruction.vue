<template>
  <div class="bg-[#E4E9F7] dark:bg-zinc-900">
    <!-- title -->
    <div class="text-3xl font-semibold text-gray-500 px-10 py-7 text-start">Dashboard Sidebar</div>

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

    <div class="flex justify-end pr-10 gap-3">
      <div data-bs-toggle="modal" data-bs-target="#sendEmail"
        class="group border-2 border-gray-400 bg-whit px-2.5 py-1.5 rounded-md cursor-pointer hover:bg-teal-500 hover:text-white hover:border-teal-500 transition duration-300 flex items-center gap-1 cursor-pointer">
        <i class='bx bx-mail-send text-teal-400 text-2xl group-hover:text-white'></i>
        <h1 class="text-sm dark:text-white">Send Email</h1>
      </div>

      <!-- modal -->
      <div class="modal fade fixed hidden top-0 left-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="sendEmail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered relative w-auto pointer-events-none">
          <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">

            <div class="text-center">
              <p class="text-md font-semibold py-7">Send Mail</p>
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
                <div class="inline-block relative w-full">
                  <select
                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option></option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                  </div>
                </div>
              </div>

              <div class="mb-10">
                <h1>Attatchment</h1>
                <div class="flex gap-3">
                  <i class='bx bx-paperclip -rotate-45 text-2xl text-teal-500'></i>
                  <h1 class="text-teal-500 text-md">RRIN-2021-0054 DN.pdf</h1>
                </div>
              </div>
            </div>

            <div class="flex gap-5 my-5 justify-end mx-5">
              <div>
                <label data-bs-dismiss="modal"
                  class="relative group h-14 border-2 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
                  <span class="relative text-base">Cancel</span>
                </label>
              </div>
              <div>
                <label
                  class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                  <span class="relative text-base text-white">Submit</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="group border-2 border-gray-400 bg-whit px-2.5 py-1.5 rounded-md cursor-pointer hover:bg-teal-500 hover:text-white hover:border-teal-500 transition duration-300 flex items-center gap-1">
        <i class='bx bxs-file-export text-teal-400 text-2xl group-hover:text-white '></i>
        <h1 class="text-sm dark:text-white">Export</h1>
      </div>
    </div>

    <!-- content -->
    <div class="px-10 w-full mt-5">
      <div class="bg-white dark:text-white dark:bg-zinc-800">

        <div class="px-5 pt-5 w-full flex justify-between border-b">
          <div class="flex items-center gap-3">
            <i class='bx bx-chevron-left text-2xl text-teal-500 font-bold'></i>
            <h1 class="font-semibold">Back</h1>
          </div>

          <div class="flex gap-3 mb-3">
            <div data-bs-toggle="modal" data-bs-target="#terminate"
              class="group border-2 border-gray-200 px-2.5 py-1.5 rounded-md cursor-pointer hover:bg-teal-500 hover:text-white hover:border-teal-500 transition duration-300 flex items-center gap-1">
              <i class='bx bx-block text-red-400 text-2xl group-hover:text-white group-hover:text-red-400'></i>
              <h1 class="text-sm">Terminate</h1>
            </div>

            <!-- terminate modal -->
            <div
              class="modal fade fixed hidden top-0 left-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
              id="terminate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered relative w-auto pointer-events-none">
                <div
                  class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">

                  <div class="text-center">
                    <p class="text-md font-semibold py-7">Reason of Cancellation</p>
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
                        class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                        <span class="relative text-base text-white">
                          <i class='bx bx-plus text-xl'></i>Add Attachments</span>
                      </label>
                    </div>
                  </div>

                  <div class="flex gap-5 my-5 justify-end mx-5">
                    <div>
                      <label data-bs-dismiss="modal"
                        class="relative group h-14 border-2 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
                        <span class="relative text-base">Cancel</span>
                      </label>
                    </div>
                    <div>
                      <label
                        class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                        <span class="relative text-base text-white">Submit</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="group border-2 border-gray-200 px-2.5 py-1.5 rounded-md cursor-pointer hover:bg-teal-500 hover:text-white hover:border-teal-500 transition duration-300 flex items-center gap-1">
              <i class='bx bxs-edit text-teal-400 text-2xl group-hover:text-white '></i>
              <h1 class="text-sm">Modify</h1>
            </div>
          </div>
        </div>

        <div class="mx-10 my-10  border-b-2 pb-5">
          <table class="text-start w-full">
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
                  <i class='bx bxs-truck text-2xl text-teal-600'></i>
                  <h1>Logistic Instruction</h1>
                </div>
              </td>
              <td>
                <h1 class="font-bold text-lg">Li-2973-2344</h1>
              </td>
              <td>
                <div class="flex gap-3">
                  <i class='bx bx-link'></i>
                  <h1>9874-2455-2345</h1>
                </div>
              </td>
              <td>
                <h1 class="font-bold text-lg">ANDIN - 09832312</h1>
              </td>
              <td></td>
              <td>
                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                  <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                  <span class="relative">Activo</span>
                </span>
              </td>
            </tr>
            <tr>
              <td>
                <h1 class="mt-8"> Attention Or </h1>
              </td>
              <td>
                <h1 class="mt-8"> Argument Vendor </h1>
              </td>
              <td>
                <h1 class="mt-8"> Vendor no </h1>
              </td>
              <td>
                <h1 class="mt-8"> Vendor Add </h1>
              </td>
            </tr>
            <tr class="font-bold text-lg">
              <td>Priyesh Tralkj</td>
              <td>AQILTY(ABU DHABI)</td>
              <td>MITME-SQL-01(Appendix 1)</td>
              <td colspan="3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, temporibus?</td>
            </tr>
          </table>
        </div>


        <div class="mx-5 px-8 rounded-md">
          <h1 class="font-bold text-2xl  text-start my-4">Cost Detail</h1>
          <div>
            <div class="mx-4 sm:-mx-8 px-4 sm:px-4 py-overflow-x-auto">
              <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                  <thead>
                    <tr>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 text-start tracking-wider dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        Description
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 text-start tracking-wider dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        QTY
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 text-start tracking-wider dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        UGM
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 text-start tracking-wider dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        Unit Price
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 text-start tracking-wider dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        Discount (%)
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 text-start tracking-wider dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        GSE/GKT(%)
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 text-start tracking-wider dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        Currency
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 text-start tracking-wider dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        Vst Account
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 text-start tracking-wider dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        Sub Total
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 text-start tracking-wider dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        Total
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 text-start tracking-wider dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        Change To
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900 ">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">Transporttationi from Ringsite</p>
                      </td>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">1</p>
                      </td>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          Trip
                        </p>
                      </td>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          1,400.00
                        </p>
                      </td>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          0
                        </p>
                      </td>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          5
                        </p>
                      </td>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          AED
                        </p>
                      </td>
                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          70.00
                        </p>
                      </td>
                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          1,400.00
                        </p>
                      </td>
                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          1,470.00
                        </p>
                      </td>
                      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm dark:bg-zinc-900 dark:border-gray-600">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          MITME
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900" colspan="6">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">Exchange Rate <span class="font-bold">1 USD = 3.6725
                            AED</span></p>
                      </td>
                      <td class="px-5 py-5 bg-gray-100 text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white"><span class="font-bold">AED </span>(total)</p>
                      </td>
                      <td class="px-5 py-5 bg-gray-100 text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          70,00
                        </p>
                      </td>
                      <td class="px-5 py-5 bg-gray-100 text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          1,400.00
                        </p>
                      </td>
                      <td class="px-5 py-5 bg-gray-100 text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          1,470.00
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900" colspan="6">
                      </td>
                      <td class="px-5 py-5 bg-gray-100 text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white"><span class="font-bold">AED </span>(total)</p>
                      </td>
                      <td class="px-5 py-5 bg-gray-100 text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          70,00
                        </p>
                      </td>
                      <td class="px-5 py-5 bg-gray-100 text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          1,400.00
                        </p>
                      </td>
                      <td class="px-5 py-5 bg-gray-100 text-sm dark:bg-zinc-900">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          1,470.00
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900" colspan="5">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          Attachment
                        </p>
                      </td>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900" colspan="6">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                          Notes
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-5 py-5 bg-white text-sm dark:bg-zinc-900" colspan="5" rowspan="3">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
                        </p>
                        <div class="flex gap-3 mb-4">
                          <i class='bx bx-paperclip -rotate-45 text-2xl text-teal-500'></i>
                          <div>
                            <h1 class="text-teal-500 text-md">RRIN-2021-0054 DN.pdf</h1>
                            <p class="text-sm">by James Taylor on 04/05/21 08.13 AM</p>
                          </div>
                        </div>
                        <label
                          class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                          <span class="relative text-base text-white">
                            <i class='bx bx-plus text-xl'></i>Add Attachments</span>
                        </label>
                      </td>
                      <td class="px-5 py-5 bg-gray-100 text-sm dark:bg-zinc-900" colspan="6">
                        <p class="text-gray-900 whitespace-no-wrap dark:text-white">
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
                class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">
                <span class="relative text-base text-white">
                  <i class='bx bx-plus text-xl mb-5'></i> Add Attachments</span>
              </label>

              <!-- modal vendor invoice -->
              <div
                class="modal fade fixed hidden top-0 left-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                id="addVendorInvoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered relative w-auto pointer-events-none">
                  <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">

                    <div class="px-10">
                      <div class="my-12">
                        <label class="block tracking-wide text-gray-700 mb-2" for="grid-first-name">
                          Vendor Invoice No.
                        </label>
                        <input
                          class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                          id="grid-first-name" type="text" placeholder="Jane">
                      </div>

                      <div class="mb-10">
                        <h1 class="mb-14">Invoice Attatchment</h1>
                        <label
                          class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                          <span class="relative text-base text-white">
                            <i class='bx bx-plus text-xl'></i>Add Attachments</span>
                        </label>
                        <h1 class="my-14">Supporting Document</h1>
                        <label
                          class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                          <span class="relative text-base text-white">
                            <i class='bx bx-plus text-xl'></i>Add Attachments</span>
                        </label>
                      </div>
                    </div>

                    <div class="flex gap-5 my-5 justify-end mx-5">
                      <div>
                        <label data-bs-dismiss="modal"
                          class="relative group h-14 border-2 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
                          <span class="relative text-base">Cancel</span>
                        </label>
                      </div>
                      <div>
                        <label
                          class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

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
                <th class="text-start text-white px-3 py-1 border border-gray-300 dark:bg-zinc-700 dark:border-0 rounded-tl-lg">Invoice No.</th>
                <th class="text-start text-white py-1 border border-gray-300 dark:bg-zinc-700 dark:border-0">Invoice Attachment</th>
                <th class="text-start text-white py-1 border border-gray-300 dark:bg-zinc-700 dark:border-0">Support Document</th>
                <th class="dark:bg-zinc-700 dark:border-0 rounded-tr-lg"></th>
              </tr>
            </thead>
            <tbody>
              <tr class="border dark:border-gray-500">
                <td class="px-3 py-1">AAL-008</td>
                <td>
                  <div class="py-1 flex items-center text-teal-500">
                    <i class='bx bx-paperclip -rotate-45 text-2xl'></i>
                    <p>AAL_008_Invoice.pdf</p>
                  </div>
                </td>
                <td>
                  <div class="py-1 flex items-center gap-2">
                    <p class="text-white bg-teal-500 rounded-full px-1.5">0</p>
                    <i class='bx bx-chevron-down text-2xl bg-gray-100 rounded-full px-1 hover:bg-gray-300 dark:bg-slate-600'></i>
                  </div>
                </td>
                <td>
                  <div class="py-1 flex items-center justify-end px-5 gap-2">
                    <i class='bx bxs-trash text-red-500'></i>
                    <i class='bx bxs-pencil text-teal-600'></i>
                  </div>
                </td>
              </tr>
              <tr class="border dark:border-gray-500">
                <td colspan="5">
                  <div class="flex w-full gap-2">
                    <div class="w-1/2 flex justify-end items-center">
                      <p class="text-end w-64">Click the button if all vendor invoices have been received</p>
                    </div>
                    <label
                      class="my-2 relative group h-14 bg-teal-500 px-10 py-4 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                      <span class="relative text-base text-white flex items-center">All Received</span>
                    </label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>



        <div>
          <h1 class="font-bold text-xl bg-gray-300 text-gray-600 px-5 py-3 dark:bg-gray-700 dark:text-white">For Internal Only</h1>
          <div class="flex px-5">
            <div class="w-1/2">
              <p class="text-sm mt-5 mb-7">Attachment </p>
              <label data-bs-toggle="modal" data-bs-target="#internalNote"
                class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                <span class="relative text-base text-white">
                  <i class='bx bx-plus text-xl mb-5'></i> Add Attachments</span>
              </label>

              <!-- modal internal note -->
              <div
                class="modal fade fixed hidden top-0 left-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                id="internalNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered relative w-auto pointer-events-none">
                  <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">

                    <div class="text-center">
                      <p class="text-md font-semibold py-7">Internal Note</p>
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

                    <div class="flex gap-5 my-5 justify-end mx-5">
                      <div>
                        <label data-bs-dismiss="modal"
                          class="relative group h-14 border-2 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-500 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left hover:text-white">
                          <span class="relative text-base">Cancel</span>
                        </label>
                      </div>
                      <div>
                        <label
                          class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                          <span class="relative text-base text-white">Submit</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="border-l-2 pl-8">
              <p class="text-sm mt-5 mb-7">Internal Note </p>
              <label
                class="relative group h-14 bg-teal-500 px-6 py-2 rounded before:rounded font-semibold before:absolute before:inset-0  before:bg-teal-700 before:scale-x-0 before:origin-right before:transition before:duration-300 hover:before:scale-x-100 hover:before:origin-left ">

                <span class="relative text-base text-white">
                  <i class='bx bx-plus text-xl'></i> Add Attachments Note</span>
              </label>
            </div>
            <div>

            </div>
          </div>
        </div>

        <div class="px-5">
          <p class="mt-10 font-bold text-xl">View Activity Note</p>

        </div>

      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: 'DetailInstruction',
  data() {
    return {
      show: false,
    };
  },
}
</script>
