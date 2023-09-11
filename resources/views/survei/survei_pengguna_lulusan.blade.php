@extends('layouts.main')

@section('container')
<div class="pt-32">
    <div class=" border rounded-lg px-8 py-6 mx-auto mb-8 max-w-6xl md:flex-1">
        <form>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">1. Etika</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">2. Keahlian pada Bidang Ilmu</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">3. Kemampuan Bahasa Asing</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">4. Penggunaan Teknologi Informasi</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">5. Komunikasi</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">6. Kerjasama Tim</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">7. Pengembangan Diri</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">8. Kepemimpinan</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 border border-black rounded px-2" style="border: 1px solid rgba(0, 0, 0, 0.3);">
                <label class="block text-gray-700 font-medium mb-2">9. Etos Kerja</label>
                <div class="flex flex-wrap -mx-2 ">
                    <div class="px-2 w-1/4">
                        <label for="color-red" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-red" name="color" value="red" class="mr-2">Sangat Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">Baik
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Cukup
                        </label>
                    </div>
                    <div class="px-2 w-1/4">
                        <label for="color-green" class="block text-gray-700 font-medium mb-2">
                            <input type="radio" id="color-green" name="color" value="green" class="mr-2">Kurang
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-center items-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </div>

        </form>
    </div>
</div>

@endsection