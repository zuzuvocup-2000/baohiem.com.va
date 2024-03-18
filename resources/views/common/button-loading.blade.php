<div class="btn-group d-flex">
    <button class="btn btn-info me-1 {{ isset($class) ? $class : '' }} js-btn-loading" style="min-width: 35px;max-width: 35px;margin: auto !important;">
        <div class="default ">
            <span class="icon-item-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                        stroke-width="0" fill="currentColor"></path>
                </svg>
            </span>
        </div>
        <div class="loading-dot d-none">
            <ul class="formLoading">
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </button>
</div>

<style>
    @keyframes preload {
        0% {
            background: #fff;
            opacity: 1
        }

        50% {
            background: #fff;
            opacity: 0.5
        }

        100% {
            background: #fff;
            opacity: 1
        }
    }

    .formLoading {
        display: flex;
        flex-wrap: nowrap;
        height: 14px;
        align-items: center;
        margin: 0.25rem 0;
        width: 100%;
        padding:  0;
    }

    .formLoading li {
        background: #fff;
        opacity: 0.5;
        display: block;
        float: left;
        width: 0.5rem;
        height: 0.5rem;
        border: 1px solid #fff;
        line-height: 12px;
        padding: 0;
        position: relative;
        margin: 0 0 0 4px;
        animation: preload 1s infinite;
        border-radius: 50%;
    }

    .formLoading li:first-child {
        margin-left: 0
    }

    .formLoading li:nth-child(2) {
        animation-delay: .15s
    }

    .formLoading li:nth-child(3) {
        animation-delay: .3s
    }

    .formLoader.formLoader-complete {
        opacity: 0;
        visibility: hidden;
        transition-duration: 1s
    }
</style>
