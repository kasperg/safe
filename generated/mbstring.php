<?php

namespace Safe;

use Safe\Exceptions\MbstringException;

/**
 * Checks if the specified byte stream is valid for the specified encoding.
 * It is useful to prevent so-called "Invalid Encoding Attack".
 *
 * @param string $var The byte stream to check. If it is omitted, this function checks
 * all the input from the beginning of the request.
 * @param string $encoding The expected encoding.
 * @throws MbstringException
 *
 */
function mb_check_encoding(string $var = null, string $encoding = null): void
{
    error_clear_last();
    $result = \mb_check_encoding($var, $encoding);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
}


/**
 *
 *
 * @param int $cp
 * @param string $encoding
 * @return string Returns a specific character .
 * @throws MbstringException
 *
 */
function mb_chr(int $cp, string $encoding = null): string
{
    error_clear_last();
    if ($encoding !== null) {
        $result = \mb_chr($cp, $encoding);
    } else {
        $result = \mb_chr($cp);
    }
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns an array of aliases for a known encoding type.
 *
 * @param string $encoding The encoding type being checked, for aliases.
 * @return array Returns a numerically indexed array of encoding aliases on success,
 *
 * @throws MbstringException
 *
 */
function mb_encoding_aliases(string $encoding): array
{
    error_clear_last();
    $result = \mb_encoding_aliases($encoding);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 * Scans string for matches to
 * pattern, then replaces the matched text
 * with the output of callback function.
 *
 * The behavior of this function is almost identical to mb_ereg_replace,
 * except for the fact that instead of
 * replacement parameter, one should specify a
 * callback.
 *
 * @param string $pattern The regular expression pattern.
 *
 * Multibyte characters may be used in pattern.
 * @param string $callback A callback that will be called and passed an array of matched elements
 * in the  subject string. The callback should
 * return the replacement string.
 *
 * You'll often need the callback function
 * for a mb_ereg_replace_callback in just one place.
 * In this case you can use an
 * anonymous function to
 * declare the callback within the call to
 * mb_ereg_replace_callback. By doing it this way
 * you have all information for the call in one place and do not
 * clutter the function namespace with a callback function's name
 * not used anywhere else.
 * @param string $string The string being checked.
 * @param string $option The search option. See mb_regex_set_options for explanation.
 * @return string The resultant string on success, .
 * @throws MbstringException
 *
 */
function mb_ereg_replace_callback(string $pattern, callable $callback, string $string, string $option = "msr"): string
{
    error_clear_last();
    $result = \mb_ereg_replace_callback($pattern, $callback, $string, $option);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @param string $pattern The regular expression pattern.
 *
 * Multibyte characters may be used in pattern.
 * @param string $replacement The replacement text.
 * @param string $string The string being checked.
 * @param string $option
 * @return string The resultant string on success, .
 * @throws MbstringException
 *
 */
function mb_ereg_replace(string $pattern, string $replacement, string $string, string $option = "msr"): string
{
    error_clear_last();
    $result = \mb_ereg_replace($pattern, $replacement, $string, $option);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @return array
 * @throws MbstringException
 *
 */
function mb_ereg_search_getregs(): array
{
    error_clear_last();
    $result = \mb_ereg_search_getregs();
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 * mb_ereg_search_init sets
 * string and pattern
 * for a multibyte regular expression. These values are used for
 * mb_ereg_search,
 * mb_ereg_search_pos, and
 * mb_ereg_search_regs.
 *
 * @param string $string The search string.
 * @param string $pattern The search pattern.
 * @param string $option The search option. See mb_regex_set_options for explanation.
 * @throws MbstringException
 *
 */
function mb_ereg_search_init(string $string, string $pattern = null, string $option = "msr"): void
{
    error_clear_last();
    if ($option !== "msr") {
        $result = \mb_ereg_search_init($string, $pattern, $option);
    } elseif ($pattern !== null) {
        $result = \mb_ereg_search_init($string, $pattern);
    } else {
        $result = \mb_ereg_search_init($string);
    }
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
}


/**
 * Returns the matched part of a multibyte regular expression.
 *
 * @param string $pattern The search pattern.
 * @param string $option The search option. See mb_regex_set_options for explanation.
 * @return array
 * @throws MbstringException
 *
 */
function mb_ereg_search_regs(string $pattern = null, string $option = "ms"): array
{
    error_clear_last();
    if ($option !== "ms") {
        $result = \mb_ereg_search_regs($pattern, $option);
    } elseif ($pattern !== null) {
        $result = \mb_ereg_search_regs($pattern);
    } else {
        $result = \mb_ereg_search_regs();
    }
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @param int $position The position to set. If it is negative, it counts from the end of the string.
 * @throws MbstringException
 *
 */
function mb_ereg_search_setpos(int $position): void
{
    error_clear_last();
    $result = \mb_ereg_search_setpos($position);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
}


/**
 *
 *
 * @param string $pattern The regular expression pattern.  Multibyte characters may be used. The case will be ignored.
 * @param string $replace The replacement text.
 * @param string $string The searched string.
 * @param string $option
 * @return string The resultant string .
 * @throws MbstringException
 *
 */
function mb_eregi_replace(string $pattern, string $replace, string $string, string $option = "msri"): string
{
    error_clear_last();
    $result = \mb_eregi_replace($pattern, $replace, $string, $option);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 * Set/Get the HTTP output character encoding.
 * Output after this function is called will be converted from the set internal encoding to encoding.
 *
 * @param string $encoding If encoding is set,
 * mb_http_output sets the HTTP output character
 * encoding to encoding.
 *
 * If encoding is omitted,
 * mb_http_output returns the current HTTP output
 * character encoding.
 * @return string If encoding is omitted,
 * mb_http_output returns the current HTTP output
 * character encoding. Otherwise,
 * Returns TRUE on success .
 * @throws MbstringException
 *
 */
function mb_http_output(string $encoding = null)
{
    error_clear_last();
    $result = \mb_http_output($encoding);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 * Set/Get the internal character encoding
 *
 * @param string $encoding encoding is the character encoding name
 * used for the HTTP input character encoding conversion, HTTP output
 * character encoding conversion, and the default character encoding
 * for string functions defined by the mbstring module.
 * You should notice that the internal encoding is totally different from the one for multibyte regex.
 * @return string If encoding is set, then
 * Returns TRUE on success .
 * In this case, the character encoding for multibyte regex is NOT changed.
 * If encoding is omitted, then
 * the current character encoding name is returned.
 * @throws MbstringException
 *
 */
function mb_internal_encoding(string $encoding = null)
{
    error_clear_last();
    $result = \mb_internal_encoding($encoding);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @param string $str
 * @param string $encoding
 * @return int Returns a code point of character .
 * @throws MbstringException
 *
 */
function mb_ord(string $str, string $encoding = null): int
{
    error_clear_last();
    if ($encoding !== null) {
        $result = \mb_ord($str, $encoding);
    } else {
        $result = \mb_ord($str);
    }
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 * Parses GET/POST/COOKIE data and
 * sets global variables. Since PHP does not provide raw POST/COOKIE
 * data, it can only be used for GET data for now. It parses URL
 * encoded data, detects encoding, converts coding to internal
 * encoding and set values to the result array or
 * global variables.
 *
 * @param string $encoded_string The URL encoded data.
 * @param array $result An array containing decoded and character encoded converted values.
 * @throws MbstringException
 *
 */
function mb_parse_str(string $encoded_string, array &$result = null): void
{
    error_clear_last();
    $result = \mb_parse_str($encoded_string, $result);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
}


/**
 * Set/Get character encoding for a multibyte regex.
 *
 * @param string $encoding The encoding
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return string
 * @throws MbstringException
 *
 */
function mb_regex_encoding(string $encoding = null)
{
    error_clear_last();
    $result = \mb_regex_encoding($encoding);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 * Sends email. Headers and messages are converted and encoded according
 * to the mb_language setting. It's a wrapper function
 * for mail, so see also mail for details.
 *
 * @param string $to The mail addresses being sent to. Multiple
 * recipients may be specified by putting a comma between each
 * address in to.
 * This parameter is not automatically encoded.
 * @param string $subject The subject of the mail.
 * @param string $message The message of the mail.
 * @param string $additional_headers String or array to be inserted at the end of the email header.
 *
 * This is typically used to add extra headers (From, Cc, and Bcc).
 * Multiple extra headers should be separated with a CRLF (\r\n).
 * Validate parameter not to be injected unwanted headers by attackers.
 *
 * If an array is passed, its keys are the header names and its
 * values are the respective header values.
 *
 * When sending mail, the mail must contain
 * a From header. This can be set with the
 * additional_headers parameter, or a default
 * can be set in php.ini.
 *
 * Failing to do this will result in an error
 * message similar to Warning: mail(): "sendmail_from" not
 * set in php.ini or custom "From:" header missing.
 * The From header sets also
 * Return-Path under Windows.
 *
 * If messages are not received, try using a LF (\n) only.
 * Some Unix mail transfer agents (most notably
 * qmail) replace LF by CRLF
 * automatically (which leads to doubling CR if CRLF is used).
 * This should be a last resort, as it does not comply with
 * RFC 2822.
 * @param string $additional_parameter additional_parameter is a MTA command line
 * parameter. It is useful when setting the correct Return-Path
 * header when using sendmail.
 *
 * This parameter is escaped by escapeshellcmd internally
 * to prevent command execution. escapeshellcmd prevents
 * command execution, but allows to add addtional parameters. For security reason,
 * this parameter should be validated.
 *
 * Since escapeshellcmd is applied automatically, some characters
 * that are allowed as email addresses by internet RFCs cannot be used. Programs
 * that are required to use these characters mail cannot be used.
 *
 * The user that the webserver runs as should be added as a trusted user to the
 * sendmail configuration to prevent a 'X-Warning' header from being added
 * to the message when the envelope sender (-f) is set using this method.
 * For sendmail users, this file is /etc/mail/trusted-users.
 * @throws MbstringException
 *
 */
function mb_send_mail(string $to, string $subject, string $message, $additional_headers = null, string $additional_parameter = null): void
{
    error_clear_last();
    $result = \mb_send_mail($to, $subject, $message, $additional_headers, $additional_parameter);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
}
