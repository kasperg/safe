<?php

namespace Safe;

use Safe\Exceptions\GnupgException;

/**
 *
 *
 * @param resource $identifier The gnupg identifier, from a call to
 * gnupg_init or gnupg.
 * @param string $fingerprint The fingerprint key.
 * @param string $passphrase The pass phrase.
 * @throws GnupgException
 *
 */
function gnupg_adddecryptkey($identifier, string $fingerprint, string $passphrase): void
{
    error_clear_last();
    $result = \gnupg_adddecryptkey($identifier, $fingerprint, $passphrase);
    if ($result === false) {
        throw GnupgException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $identifier The gnupg identifier, from a call to
 * gnupg_init or gnupg.
 * @param string $fingerprint The fingerprint key.
 * @throws GnupgException
 *
 */
function gnupg_addencryptkey($identifier, string $fingerprint): void
{
    error_clear_last();
    $result = \gnupg_addencryptkey($identifier, $fingerprint);
    if ($result === false) {
        throw GnupgException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $identifier The gnupg identifier, from a call to
 * gnupg_init or gnupg.
 * @param string $fingerprint The fingerprint key.
 * @param string $passphrase The pass phrase.
 * @throws GnupgException
 *
 */
function gnupg_addsignkey($identifier, string $fingerprint, string $passphrase = null): void
{
    error_clear_last();
    if ($passphrase !== null) {
        $result = \gnupg_addsignkey($identifier, $fingerprint, $passphrase);
    } else {
        $result = \gnupg_addsignkey($identifier, $fingerprint);
    }
    if ($result === false) {
        throw GnupgException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $identifier The gnupg identifier, from a call to
 * gnupg_init or gnupg.
 * @throws GnupgException
 *
 */
function gnupg_cleardecryptkeys($identifier): void
{
    error_clear_last();
    $result = \gnupg_cleardecryptkeys($identifier);
    if ($result === false) {
        throw GnupgException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $identifier The gnupg identifier, from a call to
 * gnupg_init or gnupg.
 * @throws GnupgException
 *
 */
function gnupg_clearencryptkeys($identifier): void
{
    error_clear_last();
    $result = \gnupg_clearencryptkeys($identifier);
    if ($result === false) {
        throw GnupgException::createFromPhpError();
    }
}


/**
 *
 *
 * @param resource $identifier The gnupg identifier, from a call to
 * gnupg_init or gnupg.
 * @throws GnupgException
 *
 */
function gnupg_clearsignkeys($identifier): void
{
    error_clear_last();
    $result = \gnupg_clearsignkeys($identifier);
    if ($result === false) {
        throw GnupgException::createFromPhpError();
    }
}


/**
 * Toggle the armored output.
 *
 * @param resource $identifier The gnupg identifier, from a call to
 * gnupg_init or gnupg.
 * @param int $armor Pass a non-zero integer-value to this function to enable armored-output
 * (default).
 * Pass 0 to disable armored output.
 * @throws GnupgException
 *
 */
function gnupg_setarmor($identifier, int $armor): void
{
    error_clear_last();
    $result = \gnupg_setarmor($identifier, $armor);
    if ($result === false) {
        throw GnupgException::createFromPhpError();
    }
}
