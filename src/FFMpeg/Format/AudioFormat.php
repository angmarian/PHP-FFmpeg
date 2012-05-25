<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Format;

interface AudioFormat
{

    public function getAudioCodec();

    public function getAudioSampleRate();

    public function getKiloBitrate();

    /**
     * Returns the list of available audio codecs for this format
     *
     * @return array
     */
    public function getAvailableAudioCodecs();
}