<?php
$menu = __('menu');
?>

<aside class="left-sidebar with-horizontal">
    <div>
        <nav class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
                @if (is_array($menu) && count($menu))
                    @foreach ($menu as $key => $value)
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ isset($value['items']) && is_array($value['items']) && count($value['items']) ? 'has-arrow' : '' }}"
                                href="{{ $value['url'] }}" aria-expanded="false">
                                @if (!empty($value['icon']))
                                    <span class="d-flex"><iconify-icon icon="{{ $value['icon'] }}"
                                            class="fs-6"></iconify-icon></span>
                                @endif
                                <span class="hide-menu">{{ $value['name'] }}</span>
                            </a>
                            @if (isset($value['items']) && is_array($value['items']) && count($value['items']))
                                <ul aria-expanded="false" class="collapse first-level">
                                    @foreach ($value['items'] as $keyItem => $valueItem)
                                        <li class="sidebar-item">
                                            <a href="{{ $valueItem['url'] }}"
                                                class="sidebar-link {{ isset($valueItem['items']) && is_array($valueItem['items']) && count($valueItem['items']) ? 'has-arrow' : 'sublink' }}">
                                                <div class="round-16 d-flex align-items-center justify-content-center">
                                                    <i class="sidebar-icon"></i>
                                                </div>
                                                <span class="hide-menu">{{ $valueItem['name'] }}</span>
                                            </a>
                                            @if (isset($valueItem['items']) && is_array($valueItem['items']) && count($valueItem['items']))
                                                <ul aria-expanded="false" class="collapse second-level">
                                                    @foreach ($valueItem['items'] as $keyItemChild => $valueItemChild)
                                                        <li class="sidebar-item">
                                                            <a href="{{ $valueItemChild['url'] }}"
                                                                class="sidebar-link sublink">
                                                                <div
                                                                    class="round-16 d-flex align-items-center justify-content-center">
                                                                    <i class="sidebar-icon"></i>
                                                                </div><span
                                                                    class="hide-menu">{{ $valueItemChild['name'] }}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                @endif
            </ul>
        </nav>
    </div>
</aside>
